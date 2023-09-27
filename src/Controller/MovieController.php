<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/movie')]
class MovieController extends AbstractController
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = "";
    }

    #[Route('/all')]
    public function getMovies(): Response
    {
        $headers = [
            'Authorization' => 'Bearer ' . $this->apiKey,
        ];
        $response = $this->httpClient->request('GET', 'https://api.themoviedb.org/3/movie/popular?language=en-US&page=1');
        $data = $response->toArray();

        return $this->render('movie/index.html.twig', [
            'movies' => $data,
        ]);
    }
}
