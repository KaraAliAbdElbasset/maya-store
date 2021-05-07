<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'excerpt', 'description', 'key_words', 'seo_description', 'image',
        'price', 'old_price', 'popularity', 'inspired', 'featured', 'is_active', 'qte',
        'brand_id', 'type_id', 'form_id', 'consumable_id', 'computerConsumable_id',
        'functionality_id',
    ];

    protected $casts = [
        'price'     => 'double',
        'old_price' => 'double',
        'featured' => 'boolean',
        'inspired' => 'boolean',
        'is_active' => 'boolean',
        'qte' => 'integer',
    ];

    public function scopeScopes($query, $scopes)
    {
        foreach($scopes as $scope)
        {
            $query->$scope();
        }

        return $query;
    }

    protected $appends = ['image_url','discount'];

    public function getImageUrlAttribute()
    {
        if (Str::contains($this->image,'http'))
        {
            return  $this->image;
        }

        return isset($this->image) ?
            asset('storage/'.$this->image) :
            asset('assets/admin/dist/img/default-150x150.png');
    }
    public function getDiscountAttribute()
    {
        if (!$this->old_price || $this->old_price === $this->price)
        {
            return  null;
        }

        return (int)(100 - ($this->price * 100)/$this->old_price);
    }


    public function brand(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function type(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function form(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Form::class);
    }

    public function computerConsumable(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ComputerConsumable::class);
    }

    public function consumable(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Consumable::class);
    }

    public function functionality(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Functionality::class);
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function scopeActive($q)
    {
        return $q->where('is_active',true);
    }

    public function scopeFeatured($q)
    {
        return $q->where('featured',true);
    }

     public function scopeLatest($q)
    {
        return $q->orderBy('created_at','desc');
    }

    public function path()
    {
        return route('product',['id'=>$this->id,'slug'=>Str::slug($this->name)]);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot(['qty','price','total'])->withTimestamps();
    }
}
