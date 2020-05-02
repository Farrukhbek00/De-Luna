<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
//
//    public function getAllCustomers()
//    {
//        $customer = new Customer();
//
//        return view('', $customer);
//    }
//
//    public function deleteCustomerByEmail()
//    {
//        $customer = Customer::where('mail', '=', 'mail')->first();
//        $customer->delete();
//        $customer->save();
//        $this->getAllCustomers();
//    }
//    public function findBy(){
//        $customer =  Customer::where('type','=','value');
//
//        return view('', $customer);
//    }
}
