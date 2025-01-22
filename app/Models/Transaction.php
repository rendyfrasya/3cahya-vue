<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\FuncCall;

class Transaction extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'cust_name',
        'cust_address',
        'cust_telephone',
        'cust_email',
        'grand_total',
    ];

    public function itemTransaction() : HasMany
    {
        return $this->hasMany(ItemTransaction::class);
    }
}
