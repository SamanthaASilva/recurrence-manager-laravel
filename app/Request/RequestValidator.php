<?php

namespace App\Request;

use Illuminate\Support\Facades\Validator;

class RequestValidator
{
    public static function validate(array $input, array $rules): object
    {
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return (object) [
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ];
        }

        return (object) [
            'success' => false
        ];
    }
}
