<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //get
    public function index()
    {
        return view('admin.index');
    }

    
}
