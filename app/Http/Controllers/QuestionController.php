<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Question;

use App\Category;

use Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    
    public function __construct()
            {
                    $this->middleware('auth');
                    
            }

    public function index($id)
    {
        $category = Category::findOrFail($id);
        return view('question.ques_add')->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request,$id)
    {
        $cat = Category::findOrFail($id);
        $user = Auth::user();
        $ques = new Question;
        $ques->sual = $request->sual;
        $ques->user_id = $user->id;
        $ques->user_username = $user->username;
        $cat->question()->save($ques);
        return redirect("/cat/$cat->id");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$quesId)
    {
        if ($id != Auth::user()->id) {
                    return redirect()->intended('/');
                }
        $ques = Question::findOrFail($quesId);
        return view('question.ques_update',compact('id','ques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$quesId)
    {
        if ($id != Auth::user()->id) {
                    return redirect()->intended('/');
                }
        $ques = Question::findOrFail($quesId);
        $ques->update($request->all());
        return redirect("/$id/myQuestions");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$quesId)
    {

        if ($id != Auth::user()->id) {
                    return redirect()->intended('/');
                }
        $ques = Question::findOrFail($quesId)->delete();    
        
        return back();
    }
}
