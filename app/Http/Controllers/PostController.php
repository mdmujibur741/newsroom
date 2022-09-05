<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
     public function index()
     {
          $post = post::orderBy('created_at', 'DESC')->paginate(20);
          return view('admin.post.index', compact('post'));
     }

     public function create()
     {
          $post = post::all();
          $tag = tag::all();
          $category = category::all();
          return view('admin.post.create', compact('post', 'tag', 'category'));
     }

     public function store(Request $request)
     {
          $request->validate([
               'title' => 'required|unique:posts',
               'category' => 'required',
               'tag' => 'required',
               'image' => 'required|image',
               'description' => 'required'
          ]);

          $post = new post();
          $post->title = $request->title;
          $post->slug = Str::of($request->title)->slug('-');
          $post->category_id = $request->category;
          $post->description = $request->description;
          $post->user_id = auth()->user()->id;
          $image = $request->image;
          Storage::putFile('public/post/', $image);
          $post->image = 'storage/post/' . $image->hashName();
          $post->save();
          $post->tag()->attach($request->tag);

          Session::flash('success', 'Post Data Submit Successfully');
          return redirect()->back();
     }


     public function edit($edit_id)
     {
          $id = Crypt::decryptString($edit_id);
          $post = post::find($id);
          $tag = tag::all();
          $category = category::all();
          return view('admin.post.edit', compact('post', 'tag', 'category'));
     }


     public function update(Request $request, $id)
     {
          $request->validate([
               'title' => 'required',
               'category' => 'required',
               'tag' => 'required',
               'description' => 'required'
          ]);

          $post = post::find($id);
          $post->title = $request->title;
          $post->slug = Str::of($request->title)->slug('-');
          $post->category_id = $request->category;
          $post->description = $request->description;

          if ($request->file('image')) {
               if (File::exists($post->image)) {
                    File::delete($post->image);
               }
               $image = $request->image;
               Storage::putFile('public/post/', $image);
               $post->image = 'storage/post/' . $image->hashName();
          }

          $post->tag()->sync($request->tag);
          $post->update();

          Session::flash('success','Post Data Update Successfully');
          return redirect()->route('post.index');

     }

     public function destroy($id)
     {
           $post = post::find($id);
           @unlink($post->image);
           $post->delete();
           Session::flash('success','Post Data Delete Successfully');
           return redirect()->route('post.index');
     }
}
