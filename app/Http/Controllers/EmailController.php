<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email(Request $request)
    {
        $validatedData = $request->validate([
            'emails' => 'required',
            ]
        );
        dd($validatedData);
        return 'hi';
    }

}
