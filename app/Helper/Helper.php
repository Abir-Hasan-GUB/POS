<?php

namespace App\Http\Helper;

class Helper
{
    public static function FormatResponse($status, $message, $statusCode):String{
        return response()->json([
            'status' => $status,
            'message' => $message
        ], $statusCode);
}
}
