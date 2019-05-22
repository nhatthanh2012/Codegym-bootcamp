<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function showCustomer(){
        return view('customer.customerlist');
    }

    function createForm()
    {
        echo 'tao form khach hang';
    }

    function getForm()
    {
        echo 'lay form khach hang';
    }

    function showId()
    {
        echo 'lay thong tin khach hang theo ID';
    }

    function editId()
    {
       
    }

    function getEditId()
    {

    }

    function deleteid()
    {

    }
    function updateId()
    {
        echo 'cap nhat khach hang moi';
    }
}
