<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function EditUser(Request $request, $id){
        if ($request->isMethod('post')){
            $user = User::find($id);
            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->type=$request->input('type');
            $user->save();
            return redirect("users");
        }
        else{
            $user = User::find($id);
            return view('auth.edit', compact('user'));
        }
    }
}
