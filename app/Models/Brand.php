<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'image',
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        if (Str::contains($this->image,'http'))
        {
            return  $this->image;
        }
        return isset($this->image) ? asset('storage/'.$this->image) : asset('assets/admin/dist/img/default-150x150.png') ;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
