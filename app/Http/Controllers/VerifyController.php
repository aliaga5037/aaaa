<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use App\User;
	use App\Category;
	use App\Question;
	use Auth;
	class VerifyController extends Controller
	{

			private $user;
			private $role;

			public function __construct()
		{
				$this->middleware('auth');
				$this->user = Auth::user();
				$this->role = $this->user->role;
				
		}




		protected function tables(Request $request)
		{
			
			
			if ($this->role == 'user') {
					return redirect()->intended('/');
				}
			$users = User::all();
			return view('admin.tables',compact('users'));
			
			
			
		}



	    protected function admin(Request $request)
	    {
	        
	       if ($this->role == 'user') {
					return redirect()->intended('/');
				}
	            
	            return view('admin.index');
	        

	        
	    
		}

		protected function questions(Request $request,$id)
	    {
	        
	       if ($this->role == 'user') {
					return redirect()->intended('/');
				}
				$users = User::findOrFail($id);
	            return view('admin.questions')->with('users',$users);
	        
	    }

	    protected function questionsEdit(Request $request,$id,$quesId)
	    {
	        
	       if ($this->role == 'user') {
					return redirect()->intended('/');
				}
				$user = User::findOrFail($id);
				$ques = Question::findOrFail($quesId); 
	            return view('admin.ques_edit',compact('user','ques'));
	        
	    }


	    protected function questionsUpdate(Request $request,$id,$quesId)
	    {
	        
	       if ($this->role == 'user') {
					return redirect()->intended('/');
				}
			$ques = Question::findOrFail($quesId);
        	$ques->update($request->all());
        	return redirect("/user/".$id."/questions");
	        
	    }
	    protected function quesDel($id)
	    {

	    	if ($this->role == 'user') {
					return redirect()->intended('/');
				}
	    	$ques = Question::findOrFail($id)->delete();    
        
        	return back();
	    }

	    protected function cats(Request $request)
	    {
	        
	       if ($this->role == 'user') {
					return redirect()->intended('/');
				}
	            
	            return view('admin.categories');
	    }

	   //  public function add_cat()
	   //  {
	   //  	if ($this->role == 'user') {
				// 	return redirect()->intended('/');
				// }
				// return view('cat.add');
	   //  }
}