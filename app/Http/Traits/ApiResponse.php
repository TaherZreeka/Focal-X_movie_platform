<?php
namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse{
    public function successResponse($data,$message,$status=200):JsonResponse
    {
        $array=[
            'data'=>$data,
            'message'=>$message
        ];
        return response()->json([$array,$status]);

    }

     protected function errorResponse( $message,$status=400): JsonResponse
    {
        $array=[
            'error'=>$message
        ];
        return response()->json([$array,$status]);
    }
}
