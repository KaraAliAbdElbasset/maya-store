<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;



    protected $fillable = [
        'name', 'slug', 'description', 'image','category_id','featured'
    ];

    protected $casts = ['featured' => 'boolean'];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        if (Str::contains($this->image,'http'))
        {
            return  $this->image;
        }
        return isset($this->image) ? asset('storage/'.$this->image) : asset('assets/admin/dist/img/default-150x150.png');
    }
    public function parent(): BelongsTo
    {

        return $this->belongsTo(self::class,'category_id','id')->withDefault(['name' => 'Main category']);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    public function children(): HasMany
    {
        return $this->hasMany(self::class);
    }

    public function scopeFeatured($q)
    {
        return $q->where('featured',true);
    }

    /**
     * @return HasMany
     */
    public function types(): HasMany
    {
        return $this->hasMany(Type::class);
    }

    /**
     * @return HasMany
     */
    public function forms(): HasMany
    {
        return $this->hasMany(Form::class);
    }

    /**
     * @return HasMany
     */
    public function functionalities(): HasMany
    {
        return $this->hasMany(Functionality::class);
    }

    /**
     * @return HasMany
     */
    public function consumables(): HasMany
    {
        return $this->hasMany(Consumable::class);
    }

    /**
     * @return HasMany
     */
    public function computerConsumables(): HasMany
    {
        return $this->hasMany(ComputerConsumable::class);
    }

    /**
     * @return BelongsToMany
     */
    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class)->withTimestamps();
    }
}
