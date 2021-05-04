<?php

namespace App\Http\Controllers;

use App\Contracts\ProductContract;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        $categories =Category::where('featured',true)->limit(8)->get();
        $brands = Brand::all();
        $l_products  = Product::latest()->limit(8)->get();
        $top_products = Product::orderBy('popularity','desc')->limit(8)->get();
        return view('welcome',compact('brands','categories','l_products','top_products'));
    }

    public function shop(ProductContract $product)
    {
        $categories =Category::with('children')->get();
        $products = $product->findByFilter(\request()->get('per_page')??18,['categories','brand'],['active','latest']);
        return view('website.pages.shop',compact('products','categories'));
    }

    public function product($id,ProductContract $product)
    {
        $categories =Category::with('children')->get();
        $p = $product->findOneBy(['id'=>$id],['categories','brand','images']);
        $images = $p->images->pluck('url')->prepend($p->image_url);
        $prodbrand = $p->brand->first();
        $product=Product::where('brand_id','=',$prodbrand->id)->get();
        return view('website.pages.product',compact('p','images','product','categories'));
    }

    public function categoryIndex()
    {
        if (\request()->has('search'))
        {
            $q = \request()->get('search');
            $categories = Category::where('name','like','%'.$q.'%')->orderBy('created_at','desc')->paginate(12);

        }else{
            $categories = Category::orderBy('created_at','desc')->paginate(12);
        }
        return view('website.pages.categories',compact('categories'));
    }
}
