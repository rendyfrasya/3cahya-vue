<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemTransaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'total_Price',
        'qty',
        'grand_total',
    ];

    public function transaction() : BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

    public function product() : HasOne
    {
        return $this->hasOne(Product::class);
    }
}
