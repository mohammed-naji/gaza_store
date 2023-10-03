<?php

namespace App\Models;

use App\Traits\Trans;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory, Trans;

    protected $guarded = [];

    function category() {
        return $this->belongsTo(Category::class)->withDefault();
    }

    function image() {
        return $this->morphOne(Image::class, 'imageable')->withDefault([
            'path' => 'no-image.png'
        ])->where('type', 'main');
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

    function getImgPathAttribute() {
        $url = 'https://via.placeholder.com/100x80';

        if($this->image) {
            $url = asset('images/'. $this->image->path);
        }

        return $url;
    }
}
