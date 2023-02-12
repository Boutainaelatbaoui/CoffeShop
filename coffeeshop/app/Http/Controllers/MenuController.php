<?php

namespace App\Http\Controllers;
use App\Models\Coffee;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = Coffee::limit(3)->get();
        return view('home', compact('data'));
    }
}
