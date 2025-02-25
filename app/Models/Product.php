<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'thumbnail',
    ];

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function photoProducts(){
        return $this->belongsToMany(Image::class, 'photo_products')->withTimestamps()->withPivot(['showable', 'cover_image']);
    }

    public function itemTransaction() : BelongsTo
    {
        return $this->belongsTo(ItemTransaction::class);
    }
}
