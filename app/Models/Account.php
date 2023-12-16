<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','username','type','balance'];

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function list() {

        $accounts =Account::orderByRaw('username')->get();
        $list = [];
        foreach ($accounts as $account) {
            $list[$account->id] = $account->username;
        }
        return $list;
    }
}
