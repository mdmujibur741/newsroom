<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function index()
    {
          $user = User::latest()->paginate(10);
          return view('admin.user.index',compact('user'));
    }

    public function create()
    {
          return view('admin.user.create');
    }

    public function store(Request $request)
    {
          $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|email|unique:users',
                'password' => 'required',
          ]);
          $user = new User();

          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = bcrypt($request->password);
          $user->save();

          Session::flash('success','User Add Successfully');
          return Redirect()->back();
    }

    public function edit($edit_id)
    {
           $id = Crypt::DecryptString($edit_id);
            $user = User::find($id);
            return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required',
      ]);

      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      if($request->password==!null){
         $user->password = bcrypt($request->password);
      }
      $user->update();

      Session::flash('success','User Add Successfully');
      return Redirect()->back();
    }
}
