<?php
namespace Chatty\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Chatty\Models\User;



class FriendController extends Controller
{
	
	public function getIndex(){
$friends=Auth::user()->friends();

	$requests = Auth::user()->friendRequests();


		return view ('friends.index')->with('friends',$friends)->with('requests',$requests);
	}
}