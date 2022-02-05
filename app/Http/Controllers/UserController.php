<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'link' => Str::random(10),
        ]);

        return response()->json($user, 200);
    }
}