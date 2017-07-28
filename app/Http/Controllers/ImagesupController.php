<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imagesup;

class ImagesupController extends Controller
{
    public function index(){
        return view('upload');
    }

    public function store(){
        foreach(request()->file('images') as $file )
       {
           $filename= $file->getClientOriginalName();
           $img = new Imagesup;
           $img->img_name=$filename;
           $img->save();
           $file->storeAs('public/upload',$filename);
       }
       return redirect('images');
    }

    public function view(){
        $images = Imagesup::all();
        return view('images',compact('images'));
    }

}
