<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Reflector;

class LoginController extends Controller
{
   public function index(){
       return view('login.index');

   }
 /*   public function test(){
       return view('login.test');

   } */
   public function verify(Request $req){

    if ($req->username == "" || $req->password == "") {

        // echo "Null Submission";
        $req->session()->flash('msg', 'Null username or password');
        return redirect('/login');
       }elseif ($req->username == $req->password) {
           //echo "Valid User";
          /*  $req->session()->put('name', $req->username);//store data in session
           $req->session()->put('password', $req->password);//store data in session
           $req->session()->get('name');
          // $req->session()->get('password');

           $req->session()->forget('name');
           //$req->session()->flush();//delete all data
           $req->session()->has('name');// true false return */
/*
            $req->session()->flash('msg', 'Invalid user info....');
            $req->session()->get('msg');//use korar por reload dile thakbena
            $req->session()->keep('msg');//use korar por rakhtety chai
            $req->session()->get('msg'); */

          //$req->session()->reflash();//sob flash er jnne akbr keep call kora
          //$req->session()->pull('name');//akshathe get call kora and flash call kora

          $req->session()->put('username', $req->username);
         return redirect("/home");
        }else {
        //    echo "Invalid User...";
            $req->session()-> flash('msg', 'Invalid Username or password....');
             return redirect('/login');
       }
      }

}
