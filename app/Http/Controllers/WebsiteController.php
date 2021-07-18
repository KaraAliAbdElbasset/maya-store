<?php

namespace App\Http\Controllers;

use App\Contracts\ProductContract;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class WebsiteController extends Controller
{
    public function index()
    {
        $data = \request()->session()->all();

        $categories =Category::where('featured',true)->limit(8)->get();
        $brands = Brand::all();
        $l_products  = Product::latest()->limit(8)->get();
        $top_products = Product::orderBy('popularity','desc')->limit(8)->get();
        return view('welcome',compact('brands','categories','l_products','top_products'));
    }

    public function shop(ProductContract $product)
    {

        $products = $product->findByFilter(\request()->get('per_page')??18,['categories','brand'],['active','latest']);
        if (\request()->has('category')){
            $category = Category::with(
                ['brands','types','forms','functionalities','consumables','computerConsumables','brands']
            )->find(\request('category'));
            if ($category)
            {
                return view('website.pages.shop',compact('category','products'));
            }
        }

        $categories = Category::where('category_id',null)
            ->withCount(['products' => function($p){
                $p->where('is_active',true);
            }])->get('id','name');

        $brands = Brand::withCount('products')->orderBy('name','asc')->get('id','name');

        return view('website.pages.shop',compact('products','categories','brands'));
    }

    public function product($id,ProductContract $product)
    {
        $categories =Category::with('children')->get();
        $p = $product->findOneBy(['id'=>$id,'is_active' => true],['categories:id,name','brand:id,name','images']);

//        $images = $p->images->pluck('url')->prepend($p->image_url);
        $product = Product::where('brand_id','=',$p->brand_id)
            ->orWhereHas('categories',function ($q) use ($p){
                $q->whereIn('id',$p->categories->pluck('id'));
            })
            ->limit(8)
            ->get();
        return view('website.pages.product',compact('p','product','categories'));
    }

    public function categoryIndex()
    {
        if (\request()->has('search'))
        {
            $q = \request()->get('search');
            $categories = Category::where('name','like','%'.$q.'%')->orderBy('created_at','desc')->paginate(12)->withQueryString();

        }else{
            $categories = Category::orderBy('created_at','desc')->paginate(12);
        }
        return view('website.pages.categories',compact('categories'));
    }

    public function about()
    {
        return view('about');
    }



    public function artisan(Request $request): string
    {
        $command = 'migrate';

        if ($request->has('fresh'))
        {
            $command .= ':fresh';
        }

        Artisan::call($command);

        return 'DONE';
    }

    public function seeding()
    {
        Artisan::call('db:seed');
        return 'DONE';
    }

    public function storage(){
        Artisan::call('storage:link');

        return 'DONE';
    }

    public function cache()
    {
        Artisan::call('key:generate');

        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('route:cache');
        Artisan::call('config:cache');

        Artisan::call('view:clear');
        Artisan::call('view:cache');
        return 'DONE';
    }

}
