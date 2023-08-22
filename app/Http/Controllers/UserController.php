<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = Product::paginate(10);


        return view('resource.index')->with(compact('product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('resource.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datavalid = $request->validate([
            //  validating the name field.  
            'first_name' => 'required',
            'last_name' => 'required|alpha',
            'email' => 'required|email'
        ]);
        // dd("hello");


        $product = new Product();
        $product->first_name = $request->first_name;
        $product->last_name = $request->last_name;
        $product->email = $request->email;
        $product->save();
        return redirect()->route('users.index')->with('success', 'User created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Product::where("id", $id)->first();
        return view('resource.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Product::where("id", $id)->first();
        return view('resource.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datavalid = $request->validate([
            //  validating the name field.  
            'first_name' => 'required',
            'last_name' => 'required|alpha',
            'email' => 'required|email|ends_with:@gmail.com'
        ]);

        $product = Product::find($id);
        $product->first_name = $request->first_name;
        $product->last_name = $request->last_name;
        $product->email = $request->email;
        $product->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}