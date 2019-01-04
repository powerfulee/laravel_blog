<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use App\User;

class UserController extends Controller
{
    public function list(){
    	$users = User::all();
    	return view('user.list',compact('users'));
    }
    
    public function create(){
    	$user = new User;
    	return view('user.create',compact('user'));
    }
    
    public function store(Request $request){
    	if ( $request->get('id') != "" ){
    		$id = $request->get('id');
    		
    		$user = User::find($id);
    	}else{
    		$user = new User;
    	}
    	
    	$user->name = $request->get('name');
	    $user->password = $request->get('password');
	    $user->email = $request->get('email');
	    	
	    $user->save();
	    
    	return redirect('user/list');
    }
    
    public function detail($id){
    	echo($id);
    	return view('user.detail');
    }
    
    public function delete($id){
    	$user = User::find($id);
    	
    	$user->delete();
    	
    	return redirect('user/list');
    }
    
    public function show($id){
    	$user = User::find($id);
    	
    	return view('user.create',compact('user'));
    }
}
