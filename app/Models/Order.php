<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email','address','phone','total_price','total_qty','state','city'
    ];


    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['qty','price','total'])->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
