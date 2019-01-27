<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UppercaseController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = $request->get('query');

        return [
            'result' => strtoupper($query)
        ];
    }

    public function validateRequest(Request $request)
    {
        $request->validate([
            'query' => 'required|string'
        ]);
    }
}
