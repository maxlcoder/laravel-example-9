<?php

if (! function_exists('response_error')) {
    function response_error($message = '失败') {
        return response()->json([
            'code' => -1,
            'msg' => $message,
        ])->send();
    }
}
