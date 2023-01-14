<?php

namespace App\Http\Controllers\Swagger;


class Tasks
{
    /**
     * @OA\Post(
     *     description="Cria uma tarefa",
     *     path="/create",
     *    * tags={"Tasks"},
     *  @OA\RequestBody(
     *    required=true,
     *    description="Cria uma tarefa",
     *    @OA\JsonContent(
     *   required={"title","description","importance"},
     *   @OA\Property(property="title", type="string", example="Estudar"),
     *   @OA\Property(property="description", type="string", example="Estudar matemática"),
     *   @OA\Property(property="importance", type="string", example="HIGH"),
     * )),
     *
     *@OA\Response(
     *         response="201",
     *         description="Tarefa criada com sucesso",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *                 @OA\Schema(
     *
     *                     example={
     *                         "statusCode": 201,
     *                         "message": "Tarefa criada com sucesso",
     *                     }
     *                 )
     *             )
     *         }
     *     ),
     * ),
     *
     */
    public function create()
    {
    }
    /**
     * @OA\Get(
     *     description="Traz todas as tarefas registradas",
     *     path="/read",
     *    * tags={"Tasks"},
     *
     *@OA\Response(
     *         response="200",
     *         description=" Tarefas encontradas com sucesso",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *                 @OA\Schema(
     *
     *                     example={
     *                        "statusCode": 200,
     *                         "message": "Tarefas encontradas",
     *                          "content": {
     *                             {
     *                               "id": 1,
     *                                "title": "Estudar",
     *                                "description": "Estudar ingles",
     *                               "importance": "HIGH"
     *                             }
     *
     *                           }
     *                     }
     *                 )
     *             )
     *         }
     *     ),
     * ),
     *
     */
    public function get()
    {
    }
/**
     * @OA\Put(
     *     description="Atualiza uma tarefa",
     *     path="/update/{id}",
     *    * tags={"Tasks"},
     *  @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id da tarefa",
     *         required=true,
     *      ),
     *   @OA\RequestBody(
     *    required=true,
     *    description="Atualiza uma tarefa",
     *    @OA\JsonContent(
     *   required={"title","description","importance"},
     *   @OA\Property(property="title", type="string", example="Estudar"),
     *   @OA\Property(property="description", type="string", example="Estudar matemática"),
     *   @OA\Property(property="importance", type="string", example="HIGH"),
     * )),
     *
     *@OA\Response(
     *         response="200",
     *         description="Tarefa atualizada com sucesso",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *                 @OA\Schema(
     *
     *                     example={
     *                        "statusCode": 200,
     *                        "message": "Tarefa atualizada com sucesso"
     *                     }
     *                 )
     *             )
     *         }
     *     ),
     * ),
     *
     */
    public function update()
    {
    }
/**
     * @OA\Delete(
     *     description="Deleta uma tarefa",
     *     path="/delete/{id}",
     *    * tags={"Tasks"},
     *  @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id da tarefa",
     *         required=true,
     *      ),
     *
     *@OA\Response(
     *         response="200",
     *         description="Tarefa deletada com sucesso",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *                 @OA\Schema(
     *
     *                     example={
     *                        "statusCode": 200,
     *                        "message": "Tarefa deletada com sucesso"
     *                     }
     *                 )
     *             )
     *         }
     *     ),
     * ),
     *
     */
    public function delete(){

    }
}
