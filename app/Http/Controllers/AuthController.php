<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return response()->noContent();
    }

    public function verify(Request $request)
    {
        return response([
            'data' => [
                'id' => 1,
                'phone' => '123456789',
            ],
            'is_registered' => false,
            'token' => 'your-auth-token',

        ]);
        //        throw \Exception::class;
        return response([
            'data' => [
                'id' => 1,
                'name' => 'John Doe',
                'phone' => '123456789',
                'email' => 'john@example.com',
                'birthDate' => '1990-01-01',
                'gender' => 'Male',
                'isVerified' => true,
                'image' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            ],
            'token' => 'your-auth-token',
        ]);
    }
    public function register(Request $request)
    {
        //        throw \Exception::class;
        return response([
            'data' => [
                'id' => 1,
                'name' => $request->name,
                'phone' => "1234567891",
                'email' => $request->email,
                'birth_date' => $request->birth_date,
                'gender' =>$request->gender,
                'image' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
            ],
            'token' => 'your-auth-token',
        ]);
    }
}
