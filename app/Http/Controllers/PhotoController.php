<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Place;

class PhotoController extends Controller
{
    public function index($id)
    {
    	$data['photo'] = Photo::where('place_id',$id)->get();
        $data['place'] = Place::find($id);
    	return view('photo.all-photo',$data);
    }
    public function add($id)
    {
        $data['place'] = Place::find($id);
    	return view('photo.add-photo',$data);
    }
    public function save(Request $Request)
    {
        $data   =   $Request->all();
        $photo = $Request->file('photo');
        if($photo)
            $photo->move("uploads",$photo->getClientOriginalName());
        $data['photo'] = $photo->getClientOriginalName();
    	Photo::create($data);
    	return redirect('photo/'.$data['place_id']);
    }
    public function edit($id)
    {
    	$data['photo'] = Photo::find($id);
    	return view('photo.edit-photo',$data);
    }
    public function update($id,Request $Request)
    {
    	Photo::where('id',$id)->update($Request->except('_token'));
    	return redirect('place');
    }
    public function delete($id)
    {
    	Photo::destroy($id);
    	return redirect('place');
    }
}
