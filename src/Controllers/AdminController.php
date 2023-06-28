<?php

namespace App\Controllers;

use App\Contracts\CarsRepositoryContract;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    const REDIRECT_URL = '/';

    public function __construct(private readonly CarsRepositoryContract $carsRepository)
    {
    }

    public function admin(): Response
    {
        //$this->onlyAuth(self::REDIRECT_URL);
        $cars = $this->carsRepository->getCars();
        return $this->view('pages/admin.php', ['cars' => $cars]);

    }
}