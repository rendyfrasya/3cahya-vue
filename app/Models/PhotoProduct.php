<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhotoProduct extends Model
{
    protected $fillable = [
        'photo'
    ];

    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
