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

    //get
    public function create()
    {
        echo 'create';
    }

    // post
    public function store(Request $request)
    {
        echo 'store';
    }

    //get

    public function show($id)
    {
        echo 'show';
    }

    //get

    public function edit($id)
    {
        echo 'edit';
    }

    //put/patch
    public function update(Request $request, $id)
    {
        echo 'update';
    }

    //delete
    public function destroy($id)
    {
        echo 'destroy';
    }
}
