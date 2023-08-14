<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function addUser(Request $request) {
        User::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'city'=>$request->city,
        ]);
    }
    public function fetchUsers()
{
    // $users = User::select('name', 'city', 'age')->get();
    // $runScript = true; // Set this variable based on your condition
    
    // return response()->json($users);
    return view('users');
}
}
