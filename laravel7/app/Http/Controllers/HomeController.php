<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){

        $name='Abid';
        $id="123";

        // echo "Welcome Home!";

        //Value Pass option-1
      // return view('home.index', ['name'=> 'Abid', 'id'=>12]); //send variable in index file
     //Value Pass option-2
      /*   return view('home.index')
                        ->with('name', 'abid')
                        ->with('id', '12'); */
//Value Pass option-3
       /*  return view('home.index')
              ->withName('abid')
              ->withId('123'); */
//Value Pass option-4
        /* return view('home.index')
              ->withName($name)
              ->withId($id);
 */

 if ($req->session()->has('username')) {

    return view('home.index', compact('id', 'name'));//Value Pass option-5
 }else {
     $req->session()->flash('msg', 'Invalid request....login first');
    return redirect('/login');

    }



    }
    public function userlist(){
         /*  $userlist = [
              ['id'=>1, 'name'=>'Abid Hossain', 'email'=>'abidhossain@gmail.com', 'password'=>'123'],
              ['id'=>2, 'name'=>'ab', 'email'=>'ab@gmail.com', 'password'=>'456'],
              ['id'=>3, 'name'=>'cd', 'email'=>'cd@gmail.com', 'password'=>'789']
          ]; */
          $userlist=$this->getUserlist();
       return view('home.list')->with('list', $userlist);
    }

    public function getUserlist(){
        return [
            ['id'=>1, 'name'=>'Abid Hossain', 'email'=>'abidhossain@gmail.com', 'password'=>'123'],
            ['id'=>2, 'name'=>'ab', 'email'=>'ab@gmail.com', 'password'=>'456'],
            ['id'=>3, 'name'=>'cd', 'email'=>'cd@gmail.com', 'password'=>'789']
        ];
    }
    public function create(Request $req){


        return view("home.create");

    }
    public function store(Request $req){

        //return redirect('/home/userlist');
       // return view('home.list')->with('list', $userlist);

    }
    public function edit($id){
        $userlist=$this->getUserlist();
        $user=[];
        foreach ($userlist as $u) {
           if ($u['id'] == $id) {
              $user = $u;
              break;
           }
        }

        //$user=    ['id'=>2, 'username'=>'ab', 'email'=>'ab@gmail.com', 'password'=>'456'];
       return view('home.edit')->with('user',$user);

    }
    public function update($id, Request $req){

       // $user = ['id'=> $id, 'name'=> $req->name, 'email'=>$req->email, 'password'=> $req->password];

        return redirect('/home/userlist');
       //return view('home.edit')->with('id',$id);

    }

}
