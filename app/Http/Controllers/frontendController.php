<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\post;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class frontendController extends Controller
{
    public function home()
    {
           
           $post = post::orderBy('created_at','DESC')->take(50)->get();

           $headerSlider = $post->slice(0,6);
           $mainSlider = $post->slice(6,3);
           $featerSlider = $post->slice(10,7);

           $category = category::take(4)->get();
           $catOne = $category->first();
           $catTwo = $category->skip(1)->first();
           $catThree = $category->skip(2)->first();
           $catFour = $category->skip(3)->first();

           $oneSlider = post::where('category_id', $catOne->id)->get() ;
           $twoSlider = post::where('category_id', $catTwo->id)->get() ;
           $threeSlider = post::where('category_id', $catThree->id)->get() ;
           $fourSlider = post::where('category_id', $catFour->id)->get() ;

           $popularOne = post::inRandomOrder()->take(2)->get();
           $popularTwo = post::inRandomOrder()->take(2)->get();
    


          return view('website.index',compact( 'catTwo','catOne', 'catThree', 'catFour', 'featerSlider','mainSlider','headerSlider','oneSlider','twoSlider','threeSlider','fourSlider', 'popularOne','popularTwo'));
    }

    public function category($slug)
    {
          $category = category::where('slug',$slug)->first();
             if($category){
                   $catPost = post::latest()->where('category_id', $category->id)->paginate(14);    
             }else{
                return redirect()->route('website.home');
             }
          return view('website.category',compact('catPost','category'));
    }

   
    public function post($slug)
    {
          $post = post::where('slug',$slug)->first();
        
        return view('website.post',compact('post'));
    }

    public function tag($slug)
    {
        $tag = tag::where('slug',$slug)->first();
          if($tag){
              $post = $tag->post()->latest()->paginate(24);
          }
        return view('website.tag',compact('post','tag'));
    }

    public function popular()
    {
          $popular = post::inRandomOrder()->take(24)->get();
          return view('website.popular',compact('popular'));
    }

    public function latest()
    {
          $latest = post::latest()->paginate(24);
          return view('website.latest',compact('latest'));
    }


    public function contact()
    {
        return view('website.contact');
    }

    public function store(Request $request)
    {
          $request->validate([
                'name' => 'required|max:80',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required|min:20',
          ]);

            $contact = new contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;

            $contact->save();

            Session::flash('success','Message Submit Successfully');
            return redirect()->back();
    }
}
