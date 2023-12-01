<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

use App\models\login;
use Hash;
use Session;

class connectController extends Controller
{
    public function veiwlogin(){
        return view('login');
    }
    public function veiwsignup(){
        return view('signup');
    }
    public function veiwhome(){
        $data = array();
        if(Session::has('loginId')){
            $data = Login::where('id','=',Session::get('loginId'))->first();
        }
        return view('home',compact('data'));
    }
    public function veiwpostdetails(){
        return view('postdetails');
    }
    public function veiwtags(){
        return view('tag');
    }
    public function veiwcategory(){
        return view('category');
    }
    public function veiwallpost(){
        return view('allpost');
    }




    public function veiwdailyattendance(){
        return view('dailyattendance');
    }
    public function veiwaddnewdailyattendance(){
        return view('addnewdailyattendance');
    }
    public function veiwaddnewpost(){
        return view('addnewpost');
    }
    public function veiwupdatedetails(){
        return view('updatedetails');
    }
    public function veiwdeletedetails(){
        return view('deletedetails');
    }
    public function veiweditupdatedetails(){
        return view('editupdatedetails');
    }
    public function veiweditdailyattendance(){
        return view('editdailyattendance');
    }

}
