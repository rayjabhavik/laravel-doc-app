<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Customer extends Model
{
    use HasFactory;
    protected static function boot(){
        parent::boot();

        static::saving(function($customer){
            $createdAt = Carbon::parse($customer->created_at);
            $newDate = $createdAt->addDays(15); 
            $customer->expiry_date = $newDate->toDateString();

            // if you have datatype varchar then this run it use for formatting date 
            // $createdAt = Carbon::parse($customer->created_at);
            // $newDate = $createdAt->addDays(15); 
            // $customer->expiry_date = $newDate->format('j-n-Y');
        });

      
    }
}
