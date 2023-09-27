<?php

namespace App\Controller;

use App\Entity\Movie;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/movie')]
class MovieController extends AbstractController
{
    public function __construct(
        private readonly HttpClientInterface $tmbdClient
    ){

    }
    #[Route('/all')]
    public function getMovies(): Response
    {
        $response = $this->tmbdClient->request(
            'GET',
            '/3/movie/popular'
        );
        return new Response($response->getContent());
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     * @throws \Exception
     */
    #[Route('/popular')]
    public function getPopularMovies(): Response
    {
        $response = $this->tmbdClient->request(
            'GET',
            '/3/movie/popular?language=fr-FR&page=1'
        );

        $results = $response->toArray()['results'];
        $movies = [];
        foreach ($results as $result) {
            $movie = new Movie();
            $movie
                ->setId($result['id'])
                ->setTitle($result['title'])
                ->setVideo($result['video'])
                ->setOverview($result['overview'])
                ->setLanguage($result['original_language'])
                ->setIsAdult($result['adult'])
                ->setImage('https://image.tmbd.org/t/p/original' . $result['poster_path'])
                ->setReleaseDate(new \DateTime($result['release_date']));
            $movies[] = $movie;
        }
        return $this->render('movies.html.twig', [
            'movies' => $movies
        ]);
    }
}