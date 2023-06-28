<?php

namespace App\Contracts;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

interface CarsRepositoryContract
{
    public function getCars(?int $count = null): Collection;

    public function load(int $id): Car;
}