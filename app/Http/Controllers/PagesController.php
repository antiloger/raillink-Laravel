<?php

namespace App\Http\Controllers;

use App\Models\TrainNews;
use App\Models\TrainArticle;
use App\Models\TrainDetails;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $view_data = TrainNews::orderBy('created_at','desc')->take(3)->get();
        $view_data01 = TrainArticle::orderBy('created_at','desc')->take(3)->get();
        $view_data02 = TrainDetails::orderBy('created_at','desc')->take(4)->get();
        //return view('pages.home', compact('title'));
        return view('pages.home')
        ->with('view_data', $view_data)
        ->with('view_data01', $view_data01)
        ->with('view_data02', $view_data02);
    }

    public function trainDetails(){
        $view_data = TrainDetails::orderBy('created_at','desc')->get(); 
        return view('pages.traindetails')->with('view_data', $view_data);
    }

    public function trainNews(){
        $view_data = TrainNews::orderBy('created_at','desc')->get(); 
        return view('pages.trainnews')->with('view_data', $view_data);
    }

    public function trainArticle(){
        $view_data = TrainArticle::orderBy('created_at','desc')->get();
        return view('pages.trainarticle')->with('view_data', $view_data);
    }

    public function aboutUs(){
        return view('pages.aboutus');
    }

    public function adminlogin(){
        return view('admin.login');
    }

    public function trainnewsExt(string $id){

        $newsdata = TrainNews::find($id);

        return view('pages.trainnewsextend')->with('newsdata', $newsdata);
    }

    public function trainarticleExt(string $id){

        $newsdata = TrainArticle::find($id);

        return view('pages.trainarticleextend')->with('newsdata', $newsdata);
    }

    public function traindetailsExt(string $id){
        
        $data = TrainDetails::find($id);

        return view('pages.traindetailsextend')->with('data', $data);
    }
}
