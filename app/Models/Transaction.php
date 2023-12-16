<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['account_id','initial_deposit','type','datetime','source'];

    public function account() {
        return $this->belongsTo(Account::class);
    }


    public static function list() {

        $transactions = Transaction::orderByRaw('initial_deposit')->get();
        $list = [];
        foreach ($transactions as $transaction) {
            $list[$transaction->id] = $transaction->initial_deposit;
        }
        return $list;
    }

}
