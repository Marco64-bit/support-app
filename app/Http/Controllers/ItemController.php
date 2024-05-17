<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::orderBy('id', 'desc')->paginate(5);
        return view('item.index', compact('items'));
    }

    public function search(Request $request)
{
    $search = $request->search;
    $items = Item::where(function ($query) use ($search) {
        $query->where('id','like',"%$search%")
            ->orWhere('name', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->orWhere('amount', 'like', "%$search%")
            ->orWhere('created_at','like',"%$search%")
            ->orWhere('updated_at','like',"%$search%");
    })->paginate(5);

    return view('item.index', compact('items', 'search'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'amount' => ['required', 'integer'],
        ]);

        Item::create($request->post());

        return redirect()->route('item.index')->with('success', 'Item has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'amount' => ['required', 'integer'],
        ]);

        $item->fill($request->post());
        $item->save();

        return redirect()->route('item.index')->with('success', 'Item has been updated successfully.');
    }
}
// AI-generated code. Review and use carefully. More info on FAQ.
// I’ve added the missing part for the update method. Make sure to adjust the code according to your specific requirements. If you have any further questions or need additional assistance, feel free to ask!
