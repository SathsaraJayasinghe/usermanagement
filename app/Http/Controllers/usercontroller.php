<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class usercontroller extends Controller
{
    function addUser(Request $req){
        $validated = $req->validate([
            'first_name'=>'required | max:50',
            'last_name'=>'required | max:50',
            'email'=>'required | max:50 | email | unique:Users',
            'city'=>'required | max:50',
            'contact'=>'required | max:11'
        ]);

        $insert= Users::insert([
            'first_name'=> $req->first_name,
            'last_name'=> $req->last_name,
            'email'=> $req->email,
            'city'=> $req->city,
            'contact'=> $req->contact,
        ]);

        if($insert){
            return redirect('/userdetails');
        }else{
            return 'error';
        }
        
    }

    function userDetails(){
        $users = Users::all();
        if($users){
            return view('userdetails', ['users'=>$users]);
        }else{
            return "no user found";
        }
        
    }

    function updateUser($id){
        return view('updateuser',['id'=>$id]);
    }

    function update(Request $req, $id){
        $validated = $req->validate([
            'first_name'=>'required | max:50',
            'last_name'=>'required | max:50',
            'email'=>'required | max:50 | email | unique:Users',
            'city'=>'required | max:50',
            'contact'=>'required | max:11'
        ]);

        $update= Users::where('id', $id)
        ->update([
            'first_name'=> $req->first_name,
            'last_name'=> $req->last_name,
            'email'=> $req->email,
            'city'=> $req->city,
            'contact'=> $req->contact,
        ]);

        if($update){
            return redirect('/userdetails');
        }else{
            return 'error';
        }
    }

    function delete($id){
        $delete = Users::where('id', '=', $id)->delete();
        if($delete){
            return redirect('/userdetails');
        }else{
            return 'error';
        }
    }
}
