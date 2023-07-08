<?php

namespace App\Http\Controllers;
abstract class Controller
{
    public static function formatResponse($data = [], $message = '', $status = true): array
    {
        return [
            'status' => $status,
            'data' => $data,
            'message' => $message,
        ];
    }

    public static function sendResponse($data=null, $message='', $status=true, $statusCode=200)
    {
        header('Content-Type: application/json');
        http_response_code($statusCode);
        return json_encode(self::formatResponse($data, $message, $status), $statusCode);
    }

    public static function sendErrorResponse($message, $data = null, $status = false, $statusCode=500)
    {
        return self::sendResponse($data, $message, $status, $statusCode);
    }
}
