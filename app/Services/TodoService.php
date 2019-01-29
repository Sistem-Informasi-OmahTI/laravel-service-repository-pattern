<?php

namespace App\Services;

use App\Repositories\TodoRepository;

class TodoService
{
    private $todoRepository;

    /**
     * Dependency Injection
     */
    public function __construct()
    {
        $this->todoRepository = new TodoRepository();
    }

    public function all()
    {
        return $this->todoRepository->all();
    }

    public function store(array $data)
    {
        return $this->todoRepository->store($data);
    }

    public function destroy(int $id)
    {
        return $this->todoRepository->destroy($id);
    }
}

?>