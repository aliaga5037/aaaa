<?php

namespace App\Http\Controllers;

use Image;
use Auth;
use DB;
use App\Category;
use App\Question;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ques = Question::orderBy('id','desc')->get();

        return view('home',compact('ques'));
    }

    public function profile()
    {
        return view('auth.profile',array('user'=> Auth::user()));
    }

    public function update_avatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalName();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatar/'.$filename));
            $user =Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('auth.profile',array('user'=> Auth::user()));
    }

    public function update(Request $request , $id)
    {
       
        $users = User::findOrFail($id);
        if (Auth::user()->role == 'admin') {
            if ($request->role == 'muellim' || $request->role == 'mentor' || $request->role == 'user') {
            $users->update($request->all());
            return redirect('/admin/tables');
        }
        }
        elseif (Auth::user()->role == 'muellim') {
            if ($request->role == 'mentor' || $request->role == 'user') {
            $users->update($request->all());
            return redirect('/admin/tables');
        }
        }
        
        
        return redirect('/home');
    }

    public function destroy($id)
    {
       $user = User::findOrFail($id)->delete();    
        
        return back();
    }

    public function myques($id)
    {
        if ($id == Auth::user()->id) {
            $user = User::findOrFail($id);
        return view('question.ques_edit')->with('user',$user);
        }
        return redirect('/home');
        
    }
}

