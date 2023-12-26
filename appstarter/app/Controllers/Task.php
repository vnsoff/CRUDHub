<?php

namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\RESTful\ResourceController;

class Task extends ResourceController
{
    protected $modelName = 'App\Models\TaskModel';
    protected $format    = 'json';

    public function index()
    {
        $tasks = $this->model->findAll();

        return $this->respond($tasks);
    }

    public function show($id = null)
    {
        $task = $this->model->find($id);

        return $this->respond($task);
    }
}
