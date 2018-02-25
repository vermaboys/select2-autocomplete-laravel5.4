<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Select2;

class AdminController extends Controller
{
    function index()
    {
    	return view('admin.dashboard');
    }
    function editProfile(){
    	return view('admin.select2');
    }
    function getUserEmail(Request $request) { 
    	$data = [];

		if($request->has('q')){
		    $search = $request->q;
		    $data = Select2::select("id","email")
		    				->where('name','LIKE',"%$search%")
		    				->get();
		}

		return response()->json($data);
		}
       
	
}
