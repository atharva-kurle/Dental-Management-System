<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Info;

class DetailController extends Controller
{
    public function app_form(Request $req){
        $name = $req->input('name');
        $date = $req->input('date');
        $time = $req->input('time');
        $ph = $req->input('phone');

        if($name = $ph = $date = $time ==""){
            return dd("enter all fields");
        }
        elseif(strlen($ph)>10)
            return dd("enter valid 10 digit phone number");
        else{
            Detail::insert(['user_name' => session('data'), 'name' => $req->input('name'), 'book_date' => $req->input('date'), 'time' => $req->input('time'), 'phone_no' => $req->input('phone')]);
            dd("success");
        }
    }


    public function getAppDate(Request $req){
        $date = $req->input('app_date');

        $book_date = Detail::where('book_date','=', $date)->get();
        $follow_up = Detail::where('follow_up','=', $date)->get();

        $row_count1 = Detail::where('book_date','=', $date)->count();
        $row_count2 = Detail::where('follow_up','=', $date)->count();
        $row_result = $row_count1 + $row_count2;

        if($row_result >= 1){

            return view('appointment', ['book_date' => $book_date, 'follow_up' => $follow_up, 'count_d' => $row_count1, 'count_f' => $row_count2]);   
        
        }
        else{
            dd("no app");
        }
    }


    public function book_offline(Request $req){
        return view('book-offline');
    }


    public function offline_app(Request $req){
        $name = $req->input('name');
        $date = $req->input('date');
        $time = $req->input('time');
        $ph = $req->input('phone');
        $user_name = $req->input('user_name');

        if($name = $ph = $date = $time = $user_name ==""){
            return dd("enter all fields");
        }
        else{
            Detail::insert(['user_name' => $req->input('user_name'), 'name' => $req->input('name'), 'book_date' => $req->input('date'), 'time' => $req->input('time'), 'phone_no' => $req->input('phone')]);
            dd("success");
        }
    }


    public function getPatientDetail(){
        $all_details = Detail::select('user_name','name','phone_no', 'amount', 'follow_up', 'time', 'book_date', 'id')->get();
        $count_d = Detail::select('user_name','name','phone_no', 'amount', 'follow_up', 'time', 'book_date', 'id')->count();
        $registered_users = Info::select('username','phone', 'added_on')->get();
        $count_r = Info::select('username','phone','added_on')->count();

        return view('patient',['details' => $all_details, 'count_d'=> $count_d, 'registered' => $registered_users, 'count_r' => $count_r]);
    }


    public function editUser(Request $req){
        $edituser = request('edituser');
        $info = Detail::where('user_name', '=', $edituser)->get();
        return view('edit', [
            'info' => $info
        ]);
    }

    public function edit_handler(Request $req){
        $id = $req->input('id');

        $result = Detail::where('id', '=', $id)->get();
        //dd(request('user_name'));

        $result[0]['user_name'] = request('user_name');
        $result[0]['name'] = request('name');
        $result[0]['phone_no'] = request('phone');
        $result[0]['amount'] = request('amount');
        $result[0]['follow_up'] = request('fdate');
        $result[0]['book_date'] = request('bdate');
        $result[0]['time'] = request('time');

        $result[0]->save();

        return redirect('patient');

        }


        public function edit_delete(Request $req){
                $id = request('id');
                Detail::where('id', '=', $id)->delete();
                return redirect('/patient');
        }

        public function delete_r(Request $req){
            $user = request('user');
            Info::where('username', '=', $user)->delete();
            return redirect('/patient');

        }

        public function checkin_b(Request $req){
            $user = request('id');
            $detail = Detail::where('id', '=', $user)->get();
            $name = $detail[0]['name'];

            if($detail[0]['follow_up'] != "")
            {
                $flag = 1;
                return view('checkin', ['name' => $name, 'id' => $user, 'book_date' => $detail[0]['book_date'], 'flag' => $flag]);
            }
            else{
                $flag = 0;
                return view('checkin', ['name' => $name, 'id' => $user, 'flag' => $flag]);
            }


        }

        public function store_checkin(Request $req){
            $id = request('id');

            $result = Detail::where('id', '=', $id)->get();
            
            if($result[0]['amount'] == ""){
                $result[0]['amount'] = request('amount');
                $result[0]->save();
                dd("success");
            }

            elseif($result[0]['amount'] != ""){
                $result[0]['amount'] = $result[0]['amount'] + request('amount');
                $result[0]['time'] = request('time');
                $result[0]['follow_up'] = request('date');
                $result[0]->save();
                dd("success");
            }


            }

            public function user_history(Request $req){
                $user = request('user');
                $result = Detail::where('user_name', '=', $user)->get();
                $ddate = $result[0]['book_date'];
                $fdate = $result[0]['follow_up'];

                return view('history', ['ddate' => $ddate, 'fdate' => $fdate]);
            }

            public function guest_booking(Request $req){
                $name = $req->input('name');
                $date = $req->input('date');
                $time = $req->input('time');
                $ph = $req->input('phone');
                $user = "Guest User";


        if($name = $ph = $date = $time ==""){
            return dd("enter all fields");
        }
        elseif(strlen($ph)>10)
            return dd("enter valid 10 digit phone number");
        else{
            Detail::insert(['user_name' => $user, 'name' => $req->input('name'), 'book_date' => $req->input('date'), 'time' => $req->input('time'), 'phone_no' => $req->input('phone')]);
            dd("success");
        }
            }

}

