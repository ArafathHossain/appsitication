<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Image;
use File;


class CategoryController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }


  public function index()
	{

		$categories = Category::orderBy('id', 'desc')->paginate(5);
		return view('admin.pages.category_create', compact('categories'));
	}

	public function store(Request $request)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image',
			'description' => 'nullable',
		]);

		$category 				= new Category();
		$category->name 		= $request->name;
		$category->parent_id 		= 1;
		$category->description 	= $request->description;

		// images also insert image
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/categories/' .$img);
		Image::make($image)->save($location);
		$category->image 	= $img;
  }
		$category->save();

		session()->flash('success','Category insert successfully!!');
		return redirect()->route('admin.category.create');
	}

	public function edit($id)
	{
		$category = Category::find($id);
		return view('admin.pages.category_edit')->with('category', $category);
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image',
			'description' => 'nullable',
		]);


		$category = Category::find($id);

		$category->name 		= $request->name;
		$category->parent_id 		= 1;
		$category->description 	= $request->description;

		//Delete the old image from folder
    if(($request->image > 0)){
		if (File::exists('images/categories/' .$category->image)) {
			File::delete('images/categories/' .$category->image);
		}

		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/categories/' .$img);
		Image::make($image)->save($location);
		$category->image 	= $img;
  }

		$category->save();

		session()->flash('success','Category Update successfully!!');
		return redirect()->route('admin.category.create');
	}

	public function delete($id)
	{

		$category = Category::find($id);

		if(!is_null($category)){
			if (File::exists('images/categories/' .$category->image)) {
			File::delete('images/categories/' .$category->image);
		}

		$category->delete();
		}
		session()->flash('success','Category has delete successfully!!');
		return back();
	}


}
