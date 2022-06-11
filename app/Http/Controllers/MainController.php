<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:15'
        ]);

        $admin = new Admin;
        $admin->fname = $request->fname;
        $admin->lname = $request->lname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','New user has been successfuly added to database');
        }else{
            return back()->with('fail','Something wrong ,try again some time');
        }
    }
    function check(Request $request){
        $request->validate([
           'email'=>'required|email',
           'password'=>'required|min:5|max:15'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }
    function ddd(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.ddd',$data);
    }
}
