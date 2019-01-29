<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Repositories\Interfaces\TodoRepositoryInterface;

class TodoRepository extends Repository implements TodoRepositoryInterface
{
    protected $table = 'todos';
}
