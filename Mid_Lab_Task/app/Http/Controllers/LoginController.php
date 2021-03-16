<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('Login.index');
    }

    public function verify(Request $req){

        $customer = DB::table('customers')
                   -> where('password', $req->password)
                   ->where('useremail', $req->useremail)
                   ->get();

        $admin = DB::table('admins')
                   -> where('ad_password', $req->password)
                   ->where('ad_email', $req->useremail)
                   ->get();

        $name = DB::table('admins')->where('ad_email', $req->useremail)->value('ad_name');
        $username = DB::table('customers')->where('useremail', $req->useremail)->value('username');

       if ($req->useremail == "" || $req->password == "") {

        $req->session()->flash('msg', 'Null Email or password');
        return redirect('/login');

       }elseif (count($customer) > 0) {

         $req->session()->put('username', $username);
         return redirect('/home/user');

        }elseif (count($admin) > 0) {

            $req->session()->put('ad_name', $name);
           return redirect('/home/admin');

          }else {
        //    echo "Invalid User...";
            $req->session()-> flash('msg', 'Invalid Email or password....');
             return redirect('/login');
       }


        //return view('home.index');
    }
}
