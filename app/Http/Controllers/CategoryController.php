<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Place;

class CategoryController extends Controller
{
    public function index()
    {
    	$data['category'] = Category::all();
    	return view('category.all-category',$data);
    }
    public function add()
    {
    	return view('category.add-category');
    }
    public function save(Request $Request)
    {
    	Category::create($Request->all());
    	return redirect('category');
    }
    public function edit($id)
    {
    	$data['category'] = Category::find($id);
    	return view('category.edit-category',$data);
    }
    public function update($id,Request $Request)
    {
    	Category::where('id',$id)->update($Request->except('_token'));
    	return redirect('category');
    }
    public function delete($id)
    {
    	Place::where('category_id',$id)->delete();
    	Category::destroy($id);
    	return redirect('category');
    }
}
