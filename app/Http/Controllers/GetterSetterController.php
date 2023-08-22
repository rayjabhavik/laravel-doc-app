<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class GetterSetterController extends Controller
{
    //
    function getterName()
    {
        $data = Product::find(1);
        dd($data->first_name);
    }

    function setName()
    {
        $product = new Product;
        $product->first_name = 'bhavik';
        $product->last_name = 'rayja';
        $product->email = 'bahvikgrayja@gmailo.com';
        $product->save();

        dd($product->first_name);
    }

    function fullName()
    {

        $data = Product::find(77);
        // dd($data);
        dd($data->full_name);

    }
}