<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TasksService;
use App\Rules\TasksRules;

class TasksController extends Controller
{
    private $service;
    private $rules;
    public function __construct(TasksService $service, TasksRules $rules)
    {
        $this->service = $service;
        $this->rules = $rules;
    }


    public function create(Request $request)
    {
        $this->validate($request, $this->rules->getRules());

        $body = $request->all();
        return   $this->service->create($body);
    }

    public function get()
    {

        return $this->service->get();
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, $this->rules->getRules());

        $body = $request->all();

        return $this->service->update($id, $body);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
