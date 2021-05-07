<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Functionality;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FunctionalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $functionalities = Functionality::latest()->paginate(10);
        return view('admin.functionalities.index',['functionalities' => $functionalities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.functionalities.create',['categories' => $categories]);
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
        Functionality::create($data);
        session()->flash('success','Functionality Has Been Created Successfully');
        return redirect()->route('admin.functionalities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Functionality $functionality
     * @return Response
     */
    public function show(Functionality $functionality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Functionality $functionality
     * @return Application|Factory|View|Response
     */
    public function edit(Functionality $functionality)
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.functionalities.create',compact('functionality','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Functionality $functionality
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Functionality $functionality)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|integer|gt:0|exists:categories,id',
        ]);
        $functionality->update($data);
        session()->flash('success','Functionality Has Been Updated Successfully');
        return redirect()->route('admin.functionalities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Functionality $functionality
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Functionality $functionality)
    {
        $functionality->delete();
        session()->flash('success','Functionality Has Been Deleted Successfully');
        return redirect()->back();
    }
}
