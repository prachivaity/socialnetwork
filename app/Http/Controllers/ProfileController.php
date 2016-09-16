<?php
namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;
use Chatty\Models\User;



class ProfileController extends Controller
{
	
	public function getProfile($username){
		$user = User::where('username',$username)->first();
		if(!$user){
			abort(404);
		}
		return view('profile.index')->with('user',$user);
	}

	public function getEdit(){
		return view('profile.edit');
	}
	public function postEdit(Request $request){
		$this -> validate($request,[
			'first_name'=>'alpha|max:50',
			'last_name'=>'alpha|max:50',
			'location'=>'max:30',
			]);
		dd('okay!!');
	}
}