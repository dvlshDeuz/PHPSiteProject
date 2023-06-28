<?php

namespace App\Controllers;

use App\Contracts\CarsRepositoryContract;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiCarsController extends Controller
{
    public function __construct(private readonly CarsRepositoryContract $carsRepository)
    {
    }

    public function cars(): Response
    {
        return new JsonResponse($this->carsRepository->getCars()->toArray());
    }
}