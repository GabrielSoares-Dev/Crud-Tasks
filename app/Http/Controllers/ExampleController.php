<?php

namespace App\Http\Controllers;

use App\Models\Tasks;

class ExampleController extends Controller
{
    private $modelTasks;
    public function __construct(Tasks $tasks)
    {
        $this->modelTasks = $tasks;
    }


    public function createTask()
    {

        $data = [
            'title' => 'Task 1',
            'description' => 'Description 1',
        ];
        $this->modelTasks->create($data);

        return response()->json([
            'message' => 'Task created successfull',
            'data' => $data
        ], 201);
    }

    //
}
