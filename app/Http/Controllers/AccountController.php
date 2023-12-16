<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $account = Account::orderBy('id')->get();

        return view('account.index', ['accounts' => $account]);
    }

    public function create() {

        $user = User::list();
        return view('account.create', ['users' => $user]);
    }



    public function store(Request $request) {

        $request->validate([
            'user_id' => 'required|numeric',
            'username' => 'required',
            'type' => 'required',
            'balance' => 'required'
        ]);

        Account::create([
            'user_id' => $request->user_id,
            'username' => $request->username,
            'type' => $request->type,
            'balance' => $request->balance,
        ]);

        return redirect('/accounts')->with('message', 'A new account has been added');
    }

    // edit and delete

    public function edit(Account $account) {

        return view('account.edit',compact('account'));
    }

    public function update(Account $account, Request $request) {

        $request->validate([
            'username' => 'required',
            'type' => 'required',
            'balance' => 'required'
        ]);

        $account->update($request->all());
        return redirect('/accounts')->with('message', " $account->username has been updated successfully");
    }

    public function delete(Account $account)
    {
        $account->delete();

        return redirect('/accounts')->with('message', " $account->username has been deleted successfully");
    }


}
