<?php

namespace App\Repositories\Interfaces;

interface RepositoryInterface
{
    public function all();
    public function store(array $data);
    public function find(int $id);
    public function update(int $id, array $data);
    public function destroy(int $id);
}