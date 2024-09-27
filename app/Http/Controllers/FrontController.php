<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Education;
use App\Models\Experience;
use App\Models\PersonalData;
use App\Models\Portfolio;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
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
            $pict = $portfolios->photoGalleries->sortBy('id')->first();
            // $portfolio->where('slug',$slug)->first();

            // dd($portfolios);
        return view('front.detail',compact(['portfolios','pict']));
    }
    public function cv(){

            $data = [

                'pdata' => PersonalData::where('id','1')->first(),
                'portfolios' => Portfolio::orderBy('id','desc')->get(),
                'education' => Education::orderBy('id','desc')->get(),
                'experience' => Experience::with('jobDescriptions')->orderBy('id','desc')->get(),
                
            ];
            // dd($data);
                $pdf = PDF::loadView('front.cv_pdf',$data);
            

        return $pdf->stream('cv-redho-fadillah-adha.pdf');
    }


    public function blogs($slug){
        $blog = Blog::with('photoGalleries')->where('slug',$slug)->first();
        $pict = $blog->photoGalleries->sortBy('id')->first();

        return view('front.blog_show',compact(['blog','pict']));
    }
    public function blog(){
        $blog = Blog::orderBy('created_at', 'desc')->paginate(6);
        return view('front.blogs',compact(['blog']));
    }
    public function portfolios(){
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(6);
        return view('front.portfolios',compact(['portfolios']));
    }
}
