<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $types = Type::latest()->paginate(10);
        return view('admin.types.index',['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.types.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|integer|gt:0|exists:categories,id',
        ]);
        Type::create($data);
        session()->flash('success','Type Has Been Created Successfully');
        return redirect()->route('admin.types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Type $type
     * @return Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Type $type
     * @return Application|Factory|View|Response
     */
    public function edit(Type $type)
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.types.create',compact('type','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Type $type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Type $type)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|integer|gt:0|exists:categories,id',
        ]);
        $type->update($data);
        session()->flash('success','Type Has Been Updated Successfully');
        return redirect()->route('admin.types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Type $type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Type $type)
    {
        $type->delete();
        session()->flash('success','Type Has Been Deleted Successfully');
        return redirect()->back();
    }
}
