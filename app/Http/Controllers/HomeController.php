<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use App\User;

Class HomeController extends Controller{
	
	public function __construct(){
		
	}

	function index(){
		$user = User::all();
		echo $user;
	}	
} 
?>