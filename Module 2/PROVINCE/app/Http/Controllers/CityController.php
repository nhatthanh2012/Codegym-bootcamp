<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::paginate(5);
        return view('city.list', compact('cities'));
    }

    public function create()
    {
        return view('city.create');
    }

    public function store()
    {
        $city = new City;
        $city->name = request('name');
        $city->save();
        return redirect()->back()->with('success', 'Đã thêm');
    }

    public function edit($id)
    {
        $city = City::find($id);
        return view('city.edit', compact('city'));
    }

    public function update($id)
    {
        $city = City::find($id);
        $city->name = request('name');
        $city->save();
        return redirect()->back()->with('success', 'Đã sửa');
    }
   

    public function delete($id)
    {
        $city = City::find($id);        
        $city->delete();
        return redirect()->back()->with('success', 'Đã xóa');
    }
}
