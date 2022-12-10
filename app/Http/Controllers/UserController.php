<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();

        return view('users.index', compact(['data']));
    }

    //add new user
    public function AddUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'unique:users'
        ]);


        $userId = Str::random(7);

        $user = new User;

        $user->userId = $userId;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->password = Hash::make($request->password);
        $user->isAdmin = $request->isAdmin;
        $user->isActive = 1;

        $user->save();

        if ($user) {
            return redirect()->back()->with('New User Added Successfully !');
        } else {
            return redirect()->back()->with('New User Added Failer !');
        }
    }

    public function EditUser($userId, Request $request)
    {
        $user = User::find($userId);
        if (!$user) {
            return redirect()->back()->with('User not found !');
        }

        $user->update($request->all());

        return redirect()->back()->with('User Edit Successfully !');
    }
}