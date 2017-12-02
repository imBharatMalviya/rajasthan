<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Category;

class PlaceController extends Controller
{
    public function index()
    {
    	$data['place'] = Place::join('categories','categories.id','places.category_id')->select('places.*','categories.category_name')->get();
    	return view('place.all-place',$data);
    }
    public function add()
    {
    	$data['category'] = Category::pluck('category_name','id')->toArray();
    	return view('place.add-place',$data);
    }
    public function save(Request $Request)
    {
    	Place::create($Request->except('_token'));
    	return redirect('place');
    }
    public function edit($id)
    {
    	$data['category'] = Category::pluck('category_name','id')->toArray();
    	$data['place'] = Place::find($id);
    	return view('place.edit-place',$data);
    }
    public function update($id,Request $Request)
    {
    	Place::where('id',$id)->update($Request->except('_token'));
    	return redirect('place');
    }
    public function delete($id)
    {
    	Place::destroy($id);
    	return redirect('place');
    }
}