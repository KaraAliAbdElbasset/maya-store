<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

/**
 * @method static create(array $data)
 */
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


    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

}
