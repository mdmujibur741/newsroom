<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
           $contact = contact::orderBy('created_at','DESC')->paginate(30);
           return view('admin.contact.index',compact('contact'));
    }

    public function destroy($id)
    {
          $contact = contact::find($id);
          $contact->delete();
          Session::flash('success','Message Delete Successfully');
          return redirect()->back();    
    }
}
