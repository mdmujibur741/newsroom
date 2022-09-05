<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{
     public function index( )
     {
            $category = category::orderBy('created_at','DESC')->paginate(10);
            return view('admin.category.index',compact('category'));
     }

     public function create()
     {
           return view('admin.category.create');
     }

     public function store(Request $request)
     {
          $category = new category();

          $request->validate([
                'name'=> 'required|unique:categories|max:60',
                'image'=> 'required|image',
          ]);


          $category->name = $request->name;
          $category->description = $request->description;
          $category->slug = Str::of($request->name)->slug('-');
          $image = $request->image;
          Storage::putFile('public/category/',$image);
          $category->image = 'storage/category/'.$image->hashName();
          $category->save();
          Session::flash('success', 'Category Add Successfully');
          return redirect()->back();
     }

     public function edit($edit_id)
     {
           $id = Crypt::decryptString($edit_id);
           $category = category::find($id);
           return view('admin.category.edit',compact('category'));
     }

     public function update(Request $request, $id)
     {
      $request->validate([
            'name'=> 'required',
      ]);
       
      $category = category::find($id);
      $category->name = $request->name;
      $category->description = $request->description;
      $category->slug = Str::of($request->name)->slug('-');

      if($request->file('image')){
           
            if(File::exists($category->image)){
                  File::delete($category->image);
            }
            $image = $request->image;
            Storage::putFile('public/category',$image);
            $category->image = 'storage/category/'.$image->hashName();

      }


      $category->save();
      Session::flash('success', 'Category Update Successfully');
      return redirect()->route('category.index');
     }

     public function destroy(Request $request,$id)
     {
          $category = category::find($id);
          $category->delete();
          Session::flash('success','Category Delete Successfully');
          return redirect()->back();
     }
}
