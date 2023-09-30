<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required | string | min:2 | max:50',
            'email' => 'required | string | email | max:50 | unique:users',
            'password' => 'required | string | min:6 | confirmed',
        ]);

        if($validate->fails())
        {
            return response()->json($validate->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'User Created Successfully',
            'user' =>  $user,
        ]);

    }
}
