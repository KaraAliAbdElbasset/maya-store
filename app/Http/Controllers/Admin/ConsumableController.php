<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Consumable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConsumableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $consumables = Consumable::latest()->paginate(10);
        return view('admin.consumables.index',['consumables' => $consumables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.consumables.create',['categories' => $categories]);
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
        Consumable::create($data);
        session()->flash('success','Consumable Has Been Created Successfully');
        return redirect()->route('admin.consumables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Consumable $consumable
     * @return Response
     */
    public function show(Consumable $consumable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Consumable $consumable
     * @return Application|Factory|View|Response
     */
    public function edit(Consumable $consumable)
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('admin.consumables.create',compact('consumable','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Consumable $consumable
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Consumable $consumable)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category_id' => 'required|integer|gt:0|exists:categories,id',
        ]);
        $consumable->update($data);
        session()->flash('success','Consumable Has Been Updated Successfully');
        return redirect()->route('admin.consumables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Consumable $consumable
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Consumable $consumable)
    {
        $consumable->delete();
        session()->flash('success','Consumable Has Been Deleted Successfully');
        return redirect()->back();
    }
}
