<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    function index() // hiển thị danh sách khách hàng
    {
        $customer = new Customer;
        $customers = $customer->all();
       return view('list', compact('customers'));
    }

    function create()  //show form tạo mới khách hàng
    {
        return view('create');
    }

    function store() // thực hiện thêm mới khách hàng
    {
        $customer = new Customer;
        $customer->name = request('name');
        $customer->dob = request('dob');
        $customer->email = request('email');

        $customer->save();
        return redirect('/index');
    }

    function edit($id) // hiển thị form và dữ liệu khách hàng cần sửa
    {
        $customer = Customer::findOrFail($id);        
        return view('edit', compact('customer'));
    }

    function update($id) // thực hiện tác vụ sửa
    {
        $customer = Customer::findOrFail($id);
        $customer->name = request('name');
        $customer->dob = request('dob');
        $customer->email = request('email');

        $customer->save();
        return redirect('/index');
    }

    function destroy($id) // xóa khách hàng
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('/index');
    }
}
