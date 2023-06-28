<?php

namespace App\Repositories;

use App\Contracts\CarsRepositoryContract;
use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;

class CarsRepository implements CarsRepositoryContract
{
    public function getCars(?int $count = null): Collection
    {
        return Car::query()
            ->when($count > 0, fn (Builder $query) => $query->limit($count))
            ->get();
    }

    public function load(int $id): Car
    {
        return Car::with(['colors', 'category'])->findOrFail($id);
    }

}