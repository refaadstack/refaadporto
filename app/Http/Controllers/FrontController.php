<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalData;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
            $portfolios = Portfolio::all();

        return view('front.index',compact(['portfolios']));
    }
    public function welcome(){
        return view('welcome');
    }
    public function detail($id){
            $portfolios = Portfolio::find($id);
        return view('front.detail',compact(['portfolios']));
    }
    public function cv(){
            $pdata = PersonalData::where('id','1')->first();
            $portfolios = Portfolio::orderBy('id','desc')->get();
            $education = Education::orderBy('id','desc')->get();
            $experience = Experience::with('jobDescriptions')->orderBy('id','desc')->get();

            // dd($portfolios);

        return view('front.cv_pdf',compact(['portfolios','pdata','education','experience']));
    }
}
