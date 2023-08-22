<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    // public $timestamps = false;


    protected $fillable = ['first_name', 'last_name', 'email'];

    function getFirstNameAttribute($value)
    {
        // for field first_name function name getFirstNameAttribute
        return ucFirst($value);
    }

    function setFirstNameAttribute($value)
    {
        if (strpos($value, 'Mr') === 0) {
            return $this->attributes['first_name'] = $value;

        } else {

            return $this->attributes['first_name'] = 'Mr ' . $value;
        }
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}