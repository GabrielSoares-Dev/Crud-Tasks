<?php

namespace App\Services;

class ResponseService
{
    public function success($message, $statusCode)
    {


        $response = [
            "statusCode" => $statusCode,
            "message" => $message
        ];
        return response()->json($response, $statusCode);
    }
    public function successWithContent($message, $statusCode, $content)
    {


        $response = [
            "statusCode" => $statusCode,
            "message" => $message,
            "content" => $content
        ];
        return response()->json($response, $statusCode);
    }
}
