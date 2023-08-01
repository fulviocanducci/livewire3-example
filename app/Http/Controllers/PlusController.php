<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlusController extends Controller
{
    public function index() 
    {
        return view('plus.index');
    }
}
