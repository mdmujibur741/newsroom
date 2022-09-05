<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
           $setting = setting::first();
          return view('admin.setting.edit',compact('setting'));
    }

    public function store(Request $request)
    {
         $request->validate([
              'copyright' => 'required',
              'address' => 'required',
              'email' => 'required|email',
              'phone' => 'required|integer',
              'image' => 'required|image',
         ]);
            $setting = new setting();
            $setting->copyright = $request->copyright;
            $setting->facebook = $request->facebook;
            $setting->linkedin = $request->linkedin;
            $setting->twitter = $request->twitter;
            $setting->youtube = $request->youtube;
            $setting->instagram = $request->instagram;
            $setting->vimeo = $request->vimeo;
            $setting->address = $request->address;
            $setting->email = $request->email;
            $setting->phone = $request->phone;

            $image = $request->image;
            Storage::putFile('public/setting',$image);
            $setting->image = 'storage/setting/'.$image->hashName();

            $setting->save();
            Session::flash('success', 'Setting Data Submit Successfully');
            return redirect()->back();

    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'copyright' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
       ]);


       $setting = setting::find($id);
       $setting->copyright = $request->copyright;
       $setting->facebook = $request->facebook;
       $setting->linkedin = $request->linkedin;
       $setting->twitter = $request->twitter;
       $setting->youtube = $request->youtube;
       $setting->instagram = $request->instagram;
       $setting->vimeo = $request->vimeo;
       $setting->address = $request->address;
       $setting->email = $request->email;
       $setting->phone = $request->phone;

       if($request->file('image')){
           if(File::exists($setting->image)){
               File::delete($setting->image);
           }
           $image = $request->image;
           Storage::putFile('public/setting',$image);
           $setting->image = 'storage/setting/'.$image->hashName();
       }

       $setting->update();
       Session::flash('success', 'Setting Data Update Successfully');
       return redirect()->back();

    }
}
