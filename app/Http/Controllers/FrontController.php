<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Department;
use App\Problem;

class FrontController extends Controller
{
    public function index(){ 
        $doctors=Doctor::all()->take(4);
    	return view('front.home',compact('doctors'));
    }

    public function services(){
    	return view('front.services');
    }

    public function news(){
    	return view('front.news');
    }

    public function about(){
        $doctors = Doctor::all()->take(4);
    	return view('front.about',compact('doctors'));
    }

    public function contact(){
    	return view('front.contact');
    }

    public function ourMedicalTeam(){
        $doctors=Doctor::all()->take(8);
        return view('front.ourDoctors',compact('doctors')); 
    }

    public function problem(Request $request){
        $formInput = $this->validate($request,[
            'name'      =>'required',
            'email'     =>'required',
            'subject'   =>'required',
            'problem'   =>'required'
        ]);

        Problem::create($formInput);
        return redirect()->route('front.contact');
    }
   
}
