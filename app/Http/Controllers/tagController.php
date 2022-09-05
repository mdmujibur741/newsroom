<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class tagController extends Controller
{
    public function index()
    {
            $tag = tag::orderBy('created_at','DESC')->paginate(10);
            return view('admin.tag.index',compact('tag'));
    }

    public function create()
    {
           return view('admin.tag.create');
    }

    public function store(Request $request)
    {
           $tag = new tag();
           $request->validate([
                'name' => 'required|unique:tags',
           ]);

           $tag->name = $request->name;
           $tag->description = $request->description;
           $tag->slug =  Str::of($request->name)->slug('-');
           $tag->save();

           Session::flash('success','Tag Data Add Successfully');
           return redirect()->back();
    }

    public function edit($edit_id)
    {
            $id =Crypt::decryptString($edit_id);
            $tag = tag::find($id);
            return view('admin.tag.edit',compact('tag'));
    }

    public function update(Request $request,$id)
    {
        $tag = tag::find($id);
          
        $request->validate([
            'name' => 'required',
       ]);

       $tag->name = $request->name;
       $tag->description = $request->description;
       $tag->slug =  Str::of($request->name)->slug('-');
       $tag->update();

       Session::flash('success','Tag Data Update Successfully');
       return redirect()->route('tag.index');
    }

    public function destroy(Request $request,$id)
    {
          $tag = tag::find($id);
          $tag->delete();
          Session::flash('success','Tag Data Delete Successfully');
          return redirect()->route('tag.index');
    }
}
