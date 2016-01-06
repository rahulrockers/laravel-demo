<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use App\Comment;

class UserController extends Controller
{
    public function __construct(){
		
	}

	function index(){

		$user = User::with('phone')->get();
		$data['users']=$user;
		return view('child',$data);
	}	

	function getPosts(){
		$posts = Post::with('comments')->get();
		$data['posts']=$posts;
		return view('blog/all_posts',$data);
	}

	function post($id){
		$data['post'] = Post::find($id);
		$data['comments'] = Comment::where('post_id','=',$id)->with('user')->get();
		
		//$data['comments'] = Comment::find($id);
		return view('blog/post',$data);
	}
}
