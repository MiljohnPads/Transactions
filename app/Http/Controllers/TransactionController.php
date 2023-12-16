<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::orderBy('id')->get();

        return view('transaction.index', ['transactions' => $transaction]);
    }


    public function create()
    {
        $account = Account::list();
        return view('transaction.create', ['accounts' => $account]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'account_id' => 'required|numeric',
            'initial_deposit' => 'required',
            'type' => 'required',
            'datetime' => 'required',
            'source' => 'required',
        ]);

        // Create the transaction
        $transaction = Transaction::create([
            'account_id' => $request->account_id,
            'initial_deposit' => $request->initial_deposit,
            'type' => $request->type,
            'datetime' => $request->datetime,
            'source' => $request->source,
        ]);

        // Transaction::create([
        //     'account_id' => $request->account_id,
        //     'initial_deposit' => $request->initial_deposit,
        //     'type' => $request->type,
        //     'datetime' => $request->datetime,
        //     'source' => $request->source,
        // ]);

        // Update account balance based on the transaction type
        $account = $transaction->account;

        if ($request->input('type') === 'deposit') {
            $account->balance += $request->input('initial_deposit');
        } elseif ($request->input('type') === 'withdraw') {
            $account->balance -= $request->input('initial_deposit');
        }

        // Save the updated balance
        $account->save();

        return redirect('/transactions')->with('message', 'Transaction has been added');
    }



//
    public function edit(Transaction $transaction) {

        return view('transaction.edit',compact('transaction'));
    }

    public function update(Transaction $transaction, Request $request) {

        $request->validate([
            'initial_deposit' => 'required',
            'type' => 'required',
            'datetime' => 'required',
            'source' => 'required',
        ]);

        $transaction->update($request->all());
        return redirect('/transactions')->with('message', " $transaction->initial_deposit has been updated successfully");
    }

    public function delete(Transaction $transaction)
    {
        $transaction->delete();

        return redirect('/transactions')->with('message', " $transaction->initial_deposit has been deleted successfully");
    }



}



















// <?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use App\Models\Account;
// use App\Models\Transaction;
// use Illuminate\Http\Request;

// class TransactionController extends Controller
// {
//     public function index()
//     {
//         $transaction = Transaction::orderBy('id')->get();

//         return view('transaction.index', ['transactions' => $transaction]);
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'account_id' => 'required|numeric',
//             'initial_deposit' => 'required',
//             'type' => 'required',
//             'datetime' => 'required',
//             'source' => 'required',
//         ]);

//         // Create the transaction
//         $transaction = Transaction::create([
//             'account_id' => $request->account_id,
//             'initial_deposit' => $request->initial_deposit,
//             'type' => $request->type,
//             'datetime' => $request->datetime,
//             'source' => $request->source,
//         ]);

//         // Update account balance based on the transaction type
//         $account = $transaction->account;

//         if ($request->input('type') === 'deposit') {
//             $account->balance += $request->input('initial_deposit');
//         } elseif ($request->input('type') === 'withdraw') {
//             $account->balance -= $request->input('initial_deposit');
//         }

//         // Save the updated balance
//         $account->save();

//         return redirect('/transactions')->with('message', 'Transaction has been added');
//     }

//     public function create()
//     {
//         $user = User::list(); // or User::get();

//         return view('transaction.create', ['users' => $user]);
//     // }

//     // public function create() {

//         $account = Account::list();
//         return view('transaction.create', ['accounts' => $account]);
//     }

//     public function delete(Transaction $transaction)
//     {
//         $transaction->delete();

//         return redirect('/transactions')->with('message', "Transaction $transaction->id has been deleted successfully");
//     }
// }





