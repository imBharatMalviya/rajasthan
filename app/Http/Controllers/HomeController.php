<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Place;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $data['photo'] = Photo::inRandomOrder()->limit(10)->get();
        return view('welcome',$data);
    }
    public function index()
    {
        $data['photo'] = Photo::inRandomOrder()->limit(10)->get();
        $data['place'] = Place::join('categories','categories.id','places.category_id')->join('photos','photos.place_id','places.id')->select('places.*','categories.category_name','photos.photo','places.id as pid')->get();
        return view('home',$data);
    }
    public function place($id)
    {
        $data['photo'] = Photo::where('place_id',$id)->get();
        $data['place'] = Place::join('categories','categories.id','places.category_id')->select('places.*','categories.category_name')->where('places.id',$id)->first();
        //return $data;
        return view('place-view',$data);

    }
}
