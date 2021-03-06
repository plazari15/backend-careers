<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface JobOpportunityRepositoryInterface
{
    public function all(array $columns = []): Collection;

    public function create(array $attributes): Model;

    public function findById(string $id): ?Model;

    public function findByCompanyId(string $companyId): Collection;

    public function update(string $id,  array $attributes): Model;

    public function delete(string $id): bool;
}
