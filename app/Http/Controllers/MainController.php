<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index(){
        return view('login');
    }

    function home(){
        $galleries = DB::table('gallery')->orderBy('updated_at',"DESC")->get();
        return view('index')->with('gallery',$galleries);
    }

    function checklogin(Request $request){

        $this->validate($request,[
           'email' => 'required|email',
           'password' => 'required|alphaNum|min:3',
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('gallery/successlogin');
        }else{
            return back()->with('error', 'Wrong Login details');
        }
    }

    function successlogin(){
        $galleryImages = DB::table('gallery')->orderBy('updated_at','DESC')->paginate(8);
        return view('successlogin')->with('gallery',$galleryImages);
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
