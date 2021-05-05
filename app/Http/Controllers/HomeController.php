<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

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
}
