<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class CustomerController extends Controller
{
    function index()
    {
        $todos = Todo::paginate(4);
        return view('customer.customerList');
    }

    function create()
    {
        return view('customer.create');
    }

    function store(Request $request)
    {
        $input = $request->all();
        Todo::create($input);
        return redirect('customer/index');
    }

    function show()
    {
        
    } function edit()
    {
        
    }
    
    function update()
    {
        
    }

    function destroy()
    {
        
    }
}
