<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Users;
use App\Category;
use App\Product;


class CController extends GenneralController
{
    public function __construct()
    {
        parent::__construct();
    }
	public function index(){
        $product = Product::where('is_active',1)->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
        return view('frontend.index', ['product' => $product,
            ]);
    }
    
    public function signin(){
    	return view('frontend.signin');
    }
    public function postSignin(Request $request){
    	$email=$request->input('email');
    	$password=md5($request->input('password')); 	
		if(Users::where('email',$email)->where('password',$password)->count()==0){
    		$alert="Username or password wrong!";
    		return view('frontend.signin',compact('alert'));
    	}
            $user = Users::where('email',$email)->first();
    		session(['user'=> $user]);
            return redirect('/');
        
    }
    public function logout(Request $request){
		$request->session()->flush();
		return redirect('/');
	}
    public function profile(){
        $product = Product::where('user_id', session('user')->id)->orderBy('id', 'DESC')->get();
    	return view('frontend.profile', ['product' => $product,
            ]);
    }
}
