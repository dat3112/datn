<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;

class Acontroller extends Controller
{
    function postAdmin(Request $request){
		$username=$request->input('username');
		$password=md5($request->input('password'));
		$admin=Admin::where('username',$username)->where('password',$password)->first();
		if($admin==null){
			$alert='username or password wrong!';
			return view('admin.login',compact('alert'));
		}
		$request->session()->put('admin',$username);
		return redirect('admin/category');
	}

	function admin(){
		return view('admin.login');
	}
	function logout(Request $request){
		$request->session()->flush();
		return redirect('admin');
	}
}
