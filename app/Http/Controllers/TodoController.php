<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TodoService;

class TodoController extends Controller
{
    public function all(TodoService $todoService)
    {
        return $todoService->all();
    }

    public function store(Request $request, TodoService $todoService)
    {
        $todoService->store($request->json()->all());

        return array(
            "success" => true,
            "message" => "Data berhasil diinput"
        );
    }

    public function destroy(int $id, TodoService $todoService)
    {
        $todoService->destroy($id);

        return array(
            "success" => true,
            "message" => "Data berhasil dihapus"
        );
    }
}
