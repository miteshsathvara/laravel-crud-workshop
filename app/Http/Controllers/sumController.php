<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sumController extends Controller
{
    public function sum(){
    	// form design
    	$value3 = 'mitesh';
    	return view('sum');
    	
    }
    public function sumvalue(Request $request){

    	//print_r($request->all());exit();
    	$value1 = $request['value1'];
    	$value2 = $request['value2'];

    	$value3 = $value1 + $value2;

    	return view('sum')->with('sum',$value3);

    	
	
    }
}
