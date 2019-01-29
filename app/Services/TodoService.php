<?php

namespace App\Services;

use App\Repositories\Interfaces\TodoRepositoryInterface;

class TodoService
{
    private $todoRepository;

    /**
     * Autowiring
     */
    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
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