<?php

namespace App\Http\Controllers;

use App\Models\BusinessOrder;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class BusinessOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $business_orders = BusinessOrder::orderBy('id', 'desc')->paginate(5);
        return view('business_order.index', compact('business_orders'));
    }

    public function search3(Request $request)
    {
        $search3 = $request->search3;
        $business_orders = BusinessOrder::where(function ($query) use ($search3) {
            $query->where('id','like',"%$search3%")
            ->orWhereHas('users3',function($query) use($search3){
                $query->where('customerID','like',"%$search3%");
            })
            ->orWhere('company_name', 'like', "%$search3%")
            ->orWhere('company_address', 'like', "%$search3%")
            ->orWhere('title', 'like', "%$search3%")
            ->orWhere('description_cost', 'like', "%$search3%")
            ->orWhere('company_date', 'like', "%$search3%")
            ->orWhere('company_time', 'like', "%$search3%")
            ->orWhere('created_at','like',"%$search3%")
            ->orWhere('updated_at','like',"%$search3%");
        })->paginate(5);

        return view('business_order.index', compact('business_orders', 'search3'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('business_order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'description_cost' => 'required',
            'company_date' => 'required',
            'company_time'=> 'required'
        ]);
        $user = auth()->user(); // Retrieve the authenticated user
        $order = new BusinessOrder($request->only(['company_name', 'company_address', 'title', 'description_cost', 'company_date', 'company_time'])); // Create a new order instance with request data
        $user->orders()->save($order); // Save the order, automatically linking it to the user
        return redirect()->route('business_order.index')->with('success', 'Business Request has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BusinessOrder $businessOrder)
    {
        return view('business_order.show', compact('businessOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessOrder $businessOrder)
    {
        return view('business_order.edit', compact('businessOrder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessOrder $businessOrder)
    {
        $request -> validate([
            'title' => 'required',
            'description_cost' => 'required',
            'company_date' => 'required',
            'company_time'=> 'required'
        ]);
        $businessOrder->fill($request->post())->save();
        return redirect()->route('business_order.index')->with('success', 'Business Request has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessOrder $businessOrder)
    {
        $businessOrder->delete();
        return redirect()->route('business_order.index')->with('success', 'Business Request has been deleted successfully');
    }
}
