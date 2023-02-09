<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = ['coffee_name', 'coffee_size', 'coffee_price', 'coffee_detail', 'coffee_category', 'coffee_image'];
}
