<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Coffee::all();
        return view('admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'coffee_name'    => 'required',
            'coffee_size'    =>  'required',
            'coffee_price'   =>  'required',
            'coffee_detail'  =>  'required',
            'coffee_category'=>  'required',
            'coffee_image'   =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        $file_name = time() . '.' . request()->coffee_image->getClientOriginalExtension();
        request()->coffee_image->move(public_path('img'), $file_name);

        $coffee = new Coffee;

        $coffee->coffee_name     = $request->coffee_name;
        $coffee->coffee_size     = $request->coffee_size;
        $coffee->coffee_price    = $request->coffee_price;
        $coffee->coffee_detail   = $request->coffee_detail;
        $coffee->coffee_category = $request->coffee_category;
        $coffee->coffee_image    = $file_name;

        $coffee->save();

        return redirect()->route('coffee.index')->with('success', 'Coffee added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function show(Coffee $coffee)
    {
        return view('admin.show', compact('coffee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function edit(Coffee $coffee)
    {
        return view('admin.edit', compact('coffee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coffee $coffee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coffee $coffee)
    {
        //
    }
}
