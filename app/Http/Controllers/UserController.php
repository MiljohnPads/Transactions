<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id')->get();

        return view('user.index', ['users' => $user]);
    }

    public function create() {
        
        return view('user.create');
    }

    // public function create() {

    //     $user = User::list();
    //     return view('book.create', ['users' => $user]);
    // }

    public function store(Request $request) {

        $request->validate([
            'full_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'sex' => 'required',
            'occupation' => 'required',
        ]);

        User::create([
            'full_name' => $request->full_name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'sex' => $request->sex,
            'occupation' => $request->occupation,
        ]);

        return redirect('/users')->with('message', 'A new user has been added');

    }

    public function edit(User $user) {

        return view('user.edit',compact('user'));
    }

    public function update(User $user, Request $request) {

        $request->validate([
            'full_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'sex' => 'required',
            'occupation' => 'required',
        ]);

        $user->update($request->all());
        return redirect('/users')->with('message', " $user->full_name has been updated successfully");
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect('/users')->with('message', " $user->full_name has been deleted successfully");
    }


}
