<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\tag;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
         $category = category::all()->count();
         $tag = tag::all()->count();
         $user = User::all()->count();
         $postCount = post::all()->count();
         $post = post::latest()->take(20)->get();
          
        return view('admin.dashboard.index',compact('category','postCount','tag','user','post'));
    }
}
