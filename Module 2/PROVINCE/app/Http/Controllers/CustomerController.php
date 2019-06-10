<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\City;
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(5);
        $cities = City::all();    
        return view('customer.list', compact('customers', 'cities'));
    }

    public function create()
    {
        $cities = City::all();
        return view('customer.create', compact('cities'));
    }

    public function store()
    {
        $customer = new customer;
        $customer->name = request('name');
        $customer->dob = request('dob');
        $customer->email = request('email');
        $customer->id_city = request('id_city');
        $customer->save();
        return redirect()->back()->with('success', 'Đã thêm');
    }

    public function edit($id)
    {
        $cities = City::all();
        $customer = Customer::find($id);
        return view('customer.edit', compact('customer','cities'));
    }

    public function update($id)
    {
        $customer = customer::find($id);
        $customer->name = request('name');
        $customer->dob = request('dob');
        $customer->email = request('email');
        $customer->id_city = request('id_city');
        $customer->save();
        return redirect()->back()->with('success', 'Đã chỉnh sửa');
    }
   

    public function delete($id)
    {
        $customer = Customer::find($id);        
        $customer->delete();
        return redirect()->back()->with('success', 'Đã xóa');
    }

    public function search()
    {
        $key = request('key');
        $customers = Customer::where('name', 'like', '%'.$key.'%')->paginate(5);   
        $cities = City::all();    
        return view('customer.list', compact('customers', 'cities'));
    }

    public function filterByCity(Request $request)
    {
        $idCity = $request->id_city;

        //kiem tra city co ton tai khong
        $cityFilter = City::find($idCity);
        //lay ra tat ca customer cua cityFiler
        $customers = Customer::where('id_city', $cityFilter->id)->paginate(5);
        $totalCustomerFilter = count($customers);

        $cities = City::all();

        return view('customer.list', compact('customers', 'cities', 'totalCustomerFilter', 'cityFilter'));
    }

}
