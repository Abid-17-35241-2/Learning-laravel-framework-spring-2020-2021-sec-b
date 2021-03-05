<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use Validator;
class RegistrationController extends Controller
{
    public function index(){

      return view('Login.registration');
    }

    public function store(CustomerRequest $req){


    $customer= new Customer();

    $customer->full_name  = $req->name;

    $customer->username   = $req->username;
    $customer->useremail  = $req->email;
    $customer->password = $req->password;

    $customer->address      = $req->address;
    $customer->company_name = $req->company_name;
    $customer->phone        = $req->phone;
    $customer->city         = $req->city;
    $customer->country      = $req->country;
    $customer->usertype     = $req->usertype;

    $customer->save();
    $req->session()-> flash('msg', 'Registration Successfull..');
    return view('login.index');

    }
}
