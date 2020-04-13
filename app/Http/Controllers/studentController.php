<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;
class studentController extends Controller
{

    // Hello Mitesh Sathvara
    
    //listing - student listing
    // create - student form display
    // store - submit
    // edit - edit display data in edit form
    // update - update data in database
    //delete - record delete
    public function list(){
    	// student listing
	    $student_data = Student::all();
	   // echo "<pre>";print_r($student);exit();
    	return view('student/list')->with('student',$student_data);

    }
    public function create(){
    	// student listing

    	return view('student/create');

    }
    public function store(Request $request){
    	// student store data
    	//echo "<pre>";print_r($request->all());exit();
    	Student::create($request->all()); // Record insert into database  	
    	//return view('student/create');

    	return \Redirect::to('student_list');

    }
    public function edit($id){
    	$student = Student::find($id);

  		return view('student/edit')->with('student',$student);
    	//echo $id;exit();

    }
    public function update(Request $request){
    
   		$data = request()->except(['_token']);
    	\DB::table('student')
              ->where('id', $request['id'])
              ->update($data);
		return \Redirect::to('student_list');
    	
    }
    public function delete($id){
    	Student::find($id)->delete();
   		//echo $id;exit();
		return \Redirect::to('student_list');
    	
    }

}
