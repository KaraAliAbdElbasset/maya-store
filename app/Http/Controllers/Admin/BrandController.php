<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\BrandContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Category;
use Exception;

class BrandController extends Controller
{
    protected $b;

    public function __construct(BrandContract $b)
    {
        $this->b = $b;
    }

    public function index()
    {
        $brands = $this->b->findByFilter(10);
        return view("admin.brands.index",compact('brands'));
    }

    public function create()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.brands.create',compact('categories'));
    }

    public function store(BrandRequest $request)
    {
        try {
            $this->b->add($request->validated());
            session()->flash('success','Brand Has Been Created Successfully');
            cache()->forget('brandCache');
            return redirect()->route('admin.brands.index');
        }catch (\Exception $exception)
        {
            session()->flash('error','Oops! Something Went Wrong, Please Try Again');
            return redirect()->route('admin.admins.index');
        }
    }

    public function show($id)
    {
        $b = $this->b->findById($id);
        return view('admin.brands.show',compact('b'));
    }

    public function edit($id)
    {
        $b = $this->b->findById($id);
        $brand_categories = $b->categories->pluck('id')->all();
        $categories = Category::orderBy('name','asc')->get();

        return view('admin.brands.edit',compact('b','categories','brand_categories'));
    }

    public function update($id,BrandRequest $request)
    {
        try {
            $this->b->update($id,$request->validated());
            session()->flash('success','Brand Has Been Updated Successfully');
            cache()->forget('brandCache');
            return redirect()->route('admin.brands.index');
        }catch (Exception $exception)
        {
            session()->flash('error','Oops! Something Went Wrong, Please Try Again');
            return redirect()->route('admin.admins.index');
        }
    }

    public function destroy($id)
    {
        try {
            $this->b->delete($id);
            session()->flash('success', 'Brand Has Been Deleted Successfully');
            cache()->forget('featuredProductCache');
            cache()->forget('inspiredProductCache');
            cache()->forget('latestProductCache');
            cache()->forget('brandCache');
            return redirect()->route('admin.brands.index');
        } catch (Exception $exception) {
            session()->flash('error', 'Oops! Something Went Wrong, Please Try Again');
            return redirect()->route('admin.admins.index');
        }

    }
}
