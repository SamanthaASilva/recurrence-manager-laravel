<?php

namespace App\Http\Controllers;

use App\Request\RequestValidator;
use Illuminate\Http\Request;

class RecurrenceController extends Controller 
{   
    public function __construct() {
    }

    public function getRecurrencesByClientId(Request $request): object
    {
        $clientId = $request['clientId'];
        $validator = RequestValidator::validate(['clientId' => $clientId], ['clientId' => 'required|integer']);

        if ($validator->errors) {
            return (object) [
                'success' => false
            ];
        }

        
        return (object) [
            'success' => true
        ];
    }
}