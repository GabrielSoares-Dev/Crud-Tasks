<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;


/**
 * @OA\Info(
 *   title="Api para cadastro de tarefas",
 *   version="1.0",
 * )
 */
/**
 * @OA\Get(
 *     path="/health",
 *     description="Mostra o estado atual da api",
 *     tags={"Health"},
 *   *@OA\Response(
 *         response="200",
 *         description="Server is Running",
 *         content={
 *             @OA\MediaType(
 *                 mediaType="application/json",
 *                 @OA\Schema(
 *                      example={
 *                       "statusCode": 200,
 *                         "message": "Server is Running",
 *
 *                     }
 *                 )
 *             )
 *         }
 *     ),
 * )
 */
class Controller extends BaseController
{
    //
}
