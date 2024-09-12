<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalData;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
            $portfolios = Portfolio::orderBy('id','DESC')->get();
            $blogs = Blog::latest()->take(6)->get();

        return view('front.index',compact(['portfolios','blogs']));
    }
    public function welcome(){
        return view('welcome');
    }
    public function detail($slug){
            $portfolios = Portfolio::where('slug', $slug)->first();
            // $portfolio->where('slug',$slug)->first();

            // dd($portfolios);
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


    public function blogs($slug){
        $blog = Blog::with('photoGalleries')->where('slug',$slug)->first();
        $pict = $blog->photoGalleries->sortBy('id')->first();

        return view('front.blog_show',compact(['blog','pict']));
    }
}
