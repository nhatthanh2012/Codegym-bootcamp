<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    function index() // hiển thị danh sách khách hàng
    {      
        $customers = Customer::all();
        return view('list', compact('customers'));
    }

    function create()  //show form tạo mới khách hàng
    {
        return view('create');
    }

    function store() // thực hiện thêm mới khách hàng
    {
        request()->validate(
            [
                'name'=>'required|min:5',
                'dob'=>'required',
                'email'=>'required|email|min:3',
            ],
            [
                'name.required'=>'không được để trống tài khoản',
                'name.min'=> 'name ít nhất 5 ký tự',                
                'dob.required'=>'dob không được để trống',
                'email.required'=>'email không được để trống',
                'email.email'=>' email phải đúng định dạng',
                'email.min'=>'email phải chứa ít nhất 3 ký tự'
            ]);
        $customer = new Customer;
        $customer->name = request('name');
        $customer->dob = request('dob');
        $customer->email = request('email');

        $customer->save();
        return redirect()->route('index');
    }

    function edit($id) // hiển thị form và dữ liệu khách hàng cần sửa
    {
        $customer = Customer::findOrFail($id);        
        return view('edit', compact('customer'));
    }

    function update($id) // thực hiện tác vụ sửa
    {
        request()->validate(
            [
                'name'=>'required|min:10|max:255',
                'email'=>'required|email|min:10'
            ],
            [
                'name.required'=>'name không được để trống',
                'name.min'=>'name ít nhất 10 ký tự',
                'name.max'=>'name chỉ có tối đã 255 ký tự',
                'email.required'=>'email không được để trống',
                'email.email'=>'email không đúng định dạng'
            ]);
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
        return redirect()->route('index');
    }
}
