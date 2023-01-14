<?php

namespace App\Services;

use App\Models\Tasks;
use App\Services\ResponseService;
use App\Exceptions\CustomException;

class TasksService
{
    private $model;
    private $responseService;


    public function __construct(Tasks $model, ResponseService $responseService)
    {
        $this->model = $model;
        $this->responseService = $responseService;
    }
    private function getTask($id)
    {
        $task = $this->model->where('id', $id)->first();

        if (!$task) {
            throw new CustomException('Tarefa não encontrada', 400);
        }

        return $task;
    }
    public function create($body)
    {
        $createTask = $this->model->create($body);

        if (!$createTask) {
            throw new CustomException("Falha ao criar tarefa", 400);
        }
        return $this->responseService->success("Tarefa criada com sucesso", 201);
    }

    public function get()
    {
        $tasks = $this->model->select(['id', 'title', 'description', 'importance'])->get();
        $isNotFound = sizeof($tasks) === 0;
        if ($isNotFound) {
            throw new CustomException('Nenhuma tarefa encontrada', 404);
        }
        return $this->responseService->successWithContent('Tarefas encontradas', 200, $tasks);
    }

    public function update($id, $body)
    {
        $task = $this->getTask($id);

        $updateTask  = $task->update($body);

        return $this->responseService->success('Tarefa atualizada com sucesso', 200);
    }

    public function delete($id)
    {
        $task = $this->getTask($id);

        $deleted = $task->delete();


        return $this->responseService->success('Tarefa deletada com sucesso', 200);
    }
}
