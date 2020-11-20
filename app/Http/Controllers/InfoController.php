<?php

namespace App\Http\Controllers; 

use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public function index() {
        if(session()->has('data')){
            return dd(session('data'));
        }
        else{return view('index');}
    }

    public function form_signin(Request $req) {
        $user = request('user_name');
        $pass = request('password');
        $ph = request('phone');

        $req->validate([
            'password' => 'required',
            'phone' => 'required|min:9|max:10',
            'user_name' => 'required'
        ]);

        $check = Info::where('username', '=', $user)->count();

        if($check == 1)
        {
            $this->validate($req, ['user_name'=>'required|email'],[
                'user_name.email' => 'Username already exists. Please try another username'
            ]);
        }
        else{
            Info::insert(['username' => request('user_name'), 'password' => request('password'), 'phone' => request('phone')]);
            
        }

    }


    public function form_login(Request $req) {

        


        $user = request('user_name');
        $pass = request('password');

        if($user == "admin" && $pass == "admin"){
            $req->session()->put('data', $req->input('user_name'));
            return redirect('admin');
        }

        $check = Info::where('username', '=', $user)->count();


        if($check == 1){
            $true_user = Info::where('username', '=', $user)->get();
            $true_pass = Info::where('password', '=', $pass)->get();

            if($user == $true_user[0]->username && $pass == $true_pass[0]->password){
                $req->session()->put('data', $req->input('user_name'));
                return redirect('profile');
            }
            else{
                return redirect('/');
            }
        }
        else{
             return redirect('/');
        }

    }

    public function app_form(Request $req){
        $name = $req->input('name');
        $date = $req->input('date');
        $time = $req->input('time');

        $data = Info::with('getPhone')->get();
        dd($data);
        if($name = $date = $time ==""){
            return dd("enter all fields");
        }
    }

    


}
