<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait JsonResponseTrait
{
    public function successResponse($data, $message = "Operation Successful", $statusCode = Response::HTTP_OK): JsonResponse
    {
        $response = [
            "success" => true,
            "data" => $data,
            "message" => $message
        ];
        return response()->json($response, $statusCode);
    }

    public function error($message = 'Operation Failed', $statusCode = Response::HTTP_BAD_REQUEST, $e = null): JsonResponse
    {
        return response()->json([
            "success" => false,
            "message" => $message,
        ], $statusCode);
    }
}
