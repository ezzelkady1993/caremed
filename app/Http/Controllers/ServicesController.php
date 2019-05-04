<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hbook;
use App\livingProgram;
use App\SportMedicine;
use App\HealthLetter;
use App\Research;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $hbooks = Hbook::all()->take(4);
        return view('front.healthbooks',compact('hbooks'));
    }

    public function livingprog()
    {
        $livprogs = livingProgram::all()->take(3);
        return view('front.livingprog',compact('livprogs'));
    }

    public function sportmed()
    {
        $spomeds = SportMedicine::all()->take(3);
        return view('front.sportmed',compact('spomeds'));
    }

    public function healthletter()
    {
        return view('front.healthletter');
    }

    public function adviceserv()
    {
        return view('front.adviceserv');
    }

    public function research()
    {
        $researches = Research::all()->take(3);
        return view('front.research',compact('researches'));
    }


    // Admin only can upload these functions
    public function Hbook()
    {
        return view('admin.service.Hbook');
    }

    public function Hliveprog()
    {
        return view('admin.service.Hliveprog');
    }

    public function Hsportmed()
    {
        return view('admin.service.Hsportmed');
    }

    public function healthLett()
    {
        return view('admin.service.healthLett');
    }

    public function addminresearch()
    {
        return view('admin.service.addminresearch');
    }



    //functions for storing admin models in database 
    //Store A Book Data

    public function bookstore(Request $request)
    {
        $formInput = $request->except('file','image');

        $this->validate($request,[
            'name'  =>'required',
            'author'  =>'required',
            'book' =>'required|mimes:pdf|max:100000',
            'image' =>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $book=$request->book;
        if($book)
        {
            $bookName=$book->getClientOriginalName();
            $book->move('books',$bookName);
            $formInput['book']=$bookName;
        }

        $image=$request->image;
        if($image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        Hbook::create($formInput);
        return redirect()->route('service.Hbook');
    }

    public function liveprog(request $request)
    {
        $formInput = $request->except('image');
        $this->validate($request,[
            'title'  =>'required',
            'image' =>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image=$request->image;
        if($image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        livingProgram::create($formInput);
        return redirect()->route('service.Hliveprog');
    }

    public function sportmedicine(request $request)
    {
        $formInput = $request->except('image');
        $this->validate($request,[
            'title'  =>'required',
            'image' =>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image=$request->image;
        if($image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        SportMedicine::create($formInput);
        return redirect()->route('service.Hsportmed');
    }

    public function addHealthLetter(request $request)
    {
        $formInput = $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);
        HealthLetter::create($formInput);
        return redirect()->route('service.healthLett');
    }

    public function addResearch(request $request)
    {
        $formInput = $request->except('image');
        $this->validate($request,[
            'title'  =>'required',
            'author' =>'required',
            'image' =>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image=$request->image;
        if($image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        Research::create($formInput);
        return redirect()->route('service.addminresearch');
    }

}
