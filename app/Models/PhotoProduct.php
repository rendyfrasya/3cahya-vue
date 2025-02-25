<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotoProduct extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'photo'
    ];

    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
