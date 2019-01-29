<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Helper\QueryBuilderTimestamp;

class Repository implements RepositoryInterface
{
    protected $table;
    protected $query;

    public function __construct()
    {
        $this->query = DB::table($this->table);
    }

    public function all()
    {
        return $this->query->get();
    }

    public function store(array $data)
    {
        $data = array_merge($data, QueryBuilderTimestamp::generateTimestamp());
        return $this->query->insert($data);
    }

    public function find(int $id)
    {
        return $this->query->where('id', $id)->first();
    }

    public function update(int $id, array $data)
    {
        $data['updated_at'] = QueryBuilderTimestamp::now();
        return $this->query->where('id', $id)->update($data);
    }

    public function destroy(int $id)
    {
        return $this->query->where('id', $id)->delete();
    }
}