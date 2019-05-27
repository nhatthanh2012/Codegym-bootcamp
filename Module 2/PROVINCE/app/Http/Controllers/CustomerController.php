<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\City;

class CustomerController extends Controller
{
    function index()
    {
       
       $customers = Customer::all();
                         
        return view('customer.list', compact('customers'));
    }

    function create()
    {
        $cities = City::All();
        return view('customer.create', compact('cities'));
    }

    function store()
    {
        $customer = new Customer;
        $city = new City;
        $customer->fullname = request('fullname');
        $customer->dob = request('dob');
        $customer->email = request('email');
        $customer->city_id = request('cityid');

        $customer->save();
        return redirect('customer/index');
    }

    function edit($id)
    {
        $customer = Customer::findOrFail($id); 
        $cities = City::All();           
        return view('customer.edit', compact('customer','cities'));
    }

    function update($id)
    {
       $customer = Customer::findOrFail($id);
       $customer->fullname = request('fullname');
       $customer->dob = request('dob');
        $customer->email = request('email');
        $customer->city_id = request('cityid');

      $customer->save();
      return redirect('customer/index');
    }

    function delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect('customer/index');
    }
}
