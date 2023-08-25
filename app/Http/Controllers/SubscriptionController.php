<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class SubscriptionController extends Controller
{
    //
    function index(Request $request){
        $customer = new Customer();
        
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->save();
        return redirect()->route('subcreate')->with('success', 'User created successfully.');
    }
}
