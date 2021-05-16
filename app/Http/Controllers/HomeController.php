<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $orders = Order::latest()->where('user_id',auth()->id())->paginate(10,['id','state','created_at','total_price']);
        return view('home',compact('orders'));
    }

    public function orderShow($id)
    {
        $order = Order::with('products')
            ->where('user_id',auth()->id())
            ->findOrFail($id);
        return view('myOrders',compact('order'));
    }

    public function profileEdit()
    {
        $user = Auth::user();

        return view('website.pages.profileEdit',compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email|unique:users,email,'.auth()->id(),
            'address' => 'sometimes|nullable|string',
            'phone' => 'sometimes|nullable|string',
            'city' => 'sometimes|nullable|string',
        ]);

        \auth()->user()->update($data);
        session()->flash('success','Profile Has Been Updated Successfully');
        return redirect()->route('home');
    }
}
