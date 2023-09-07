<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    function category() {
        return $this->belongsTo(Category::class)->withDefault();
    }

    function image() {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'main');
    }

    function gallery() {
        return $this->morphMany(Image::class, 'imageable')->where('type', 'gallery');
    }

    function reviews() {
        return $this->HasMany(Review::class);
    }

    function order_details() {
        return $this->HasMany(OrderDetail::class);
    }
}
