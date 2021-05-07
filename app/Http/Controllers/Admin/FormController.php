<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Form;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $forms = Form::with('category')->latest()->paginate(10);
        return view('admin.forms.index',['forms' => $forms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.forms.create',['categories' => $categories]);
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
        Form::create($data);
        session()->flash('success','Form Has Been Created Successfully');
        return redirect()->route('admin.forms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Form $form
     * @return Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Form $form
     * @return Application|Factory|View|Response
     */
    public function edit(Form $form)
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.forms.edit',compact('form','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Form $form
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Form $form)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|integer|gt:0|exists:categories,id',
        ]);
        $form->update($data);
        session()->flash('success','Form Has Been Updated Successfully');
        return redirect()->route('admin.forms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Form $form
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Form $form)
    {
        $form->delete();
        session()->flash('success','Form Has Been Deleted Successfully');
        return redirect()->back();
    }
}
