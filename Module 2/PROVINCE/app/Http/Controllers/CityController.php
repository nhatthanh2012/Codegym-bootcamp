<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\City;

class CityController extends Controller
{
    function index()
    {        
        $cities = City::All();     
        return view('city.list', compact('cities'));
    }

    function create()
    {
        return view('city.create');
    }

    function store()
    {
        $city = new City;
        $city->name_province = request('nameprovince');
        

        $city->save();
        return redirect('city/index');
    }

    function edit($id)
    {
        $city = City::findOrFail($id);
       return view('city/edit', compact('city'));
    }

    function update($id)
    {
        $city = City::findOrFail($id);       
        $city->name_province = request('nameprovince');

        $city->save();
        return redirect('city/index');
    }

    function delete($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect('city/index');
    }

}
