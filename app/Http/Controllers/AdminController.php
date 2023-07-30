<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;
use App\Models\User;
use App\Models\TrainNews;
use App\Models\TrainArticle;
use App\Models\TrainDetails;

class AdminController extends Controller
{


    //login function
    public function loginfunc(Request $request){
        $credentials = $request->only('email', 'password');
        
        if(auth()->attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/admindashboard');
        }

        return back()->withErrors(['adminemail' => 'Invalid Input!!!']);
    }

    //show dashboard
    public function show(){
        $countnews = TrainNews::count();
        $countarticle = TrainArticle::count();
        $countadmin = User::count();
        $countdetails = TrainDetails::count();
        return view('adminLayout.dashboard')
        ->with('countnews', $countnews)
        ->with('countarticle', $countarticle)
        ->with('countadmin', $countadmin)
        ->with('countdetails',$countdetails);
    }

    //show register/createform
    public function create(){

        return view('adminuser.register');

    }

    //save admin details
    public function store(Request $request){

        //encrypt password
        $encryptpsw = bcrypt($request->adminpassword);

        $userauth = new User;
        $userauth->name = $request->adminname;
        $userauth->email = $request->adminemail;
        $userauth->password = $encryptpsw;
        $userauth->save();

        auth()->login($userauth);

        return view('adminuser.login');
    }

    //login page load
    public function adminlogin(){

        return view('adminuser.login');

    }

    public function exit(Request $request){
        auth()->logout();


        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/adminlogin');
    }
}
