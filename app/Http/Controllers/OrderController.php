<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $orders = Order::orderBy('id', 'desc')->paginate(5);

        return view('order.index', compact('orders'));
    }

    public function search2(Request $request)
    {
        $search2 = $request->search2;

        $orders = Order::where(function ($query) use ($search2) {
            $query->where('id','like',"%$search2%")
            ->orWhereHas('users4',function($query) use($search2){
                $query->where('customerID','like',"%$search2%");
            })
            ->orWhere('title', 'like', "%$search2%")
            ->orWhere('description_cost', 'like', "%$search2%")

            ->orWhere('home_address', 'like', "%$search2%")
            ->orWhere('home_date', 'like', "%$search2%")
            ->orWhere('home_time', 'like', "%$search2%")
            ->orWhere('created_at','like',"%$search2%")
            ->orWhere('updated_at','like',"%$search2%");
        })->paginate(5);

        return view('order.index', compact('orders', 'search2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'description_cost' => 'required',
            'home_address' => 'required',
            'home_date' => 'required',
            'home_time'=> 'required'
        ]);
        $user = auth()->user(); // Retrieve the authenticated user
        $order = new Order($request->only(['title', 'description_cost', 'home_address', 'home_date', 'home_time'])); // Create a new order instance with request data
        $user->orders()->save($order); // Save the order, automatically linking it to the user
        return redirect()->route('order.index')->with('success', 'Request Support has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request -> validate([
            'title' => 'required',
            'description_cost' => 'required',
            'home_address' => 'required',
            'home_date' => 'required',
            'home_time' => 'required',
        ]);
        $order->fill($request->post())->save();
        return redirect()->route('order.index')->with('success', 'Request Support has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index')->with('success', 'Request Support has been deleted successfully');
    }
}
