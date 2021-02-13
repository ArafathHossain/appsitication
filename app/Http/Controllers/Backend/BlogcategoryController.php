<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blogcategory;
use Image;
use File;



class BlogcategoryController extends Controller
{
     public function __construct()
  {
      $this->middleware('auth:admin');
  }


  public function index()
	{

		$blogcategories = blogcategory::orderBy('id', 'desc')->paginate(5);
		return view('admin.pages.blogcategory_create', compact('blogcategories'));
	}

	public function store(Request $request)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image',
			'description' => 'nullable',
		]);

		$blogcategory 				= new Blogcategory();
		$blogcategory->name 		= $request->name;
		$blogcategory->description 	= $request->description;

		// images also insert image
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/blogcategories/' .$img);
		Image::make($image)->save($location);
		$blogcategory->image 	= $img;
  }
		$blogcategory->save();

		session()->flash('success','blog category insert successfully!!');
		return redirect()->route('admin.blogcategory.create');
	}

	public function edit($id)
	{
		$blogcategory = Blogcategory::find($id);
		return view('admin.pages.blogcategory_edit')->with('category', $category);
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image',
			'description' => 'nullable',
		]);


		$blogcategory = Blogcategory::find($id);

		$blogcategory->name 		= $request->name;
		$blogcategory->description 	= $request->description;

		//Delete the old image from folder
    if(($request->image > 0)){
		if (File::exists('images/blogcategories/' .$blogcategory->image)) {
			File::delete('images/blogcategories/' .$blogcategory->image);
		}

		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/blogcategories/' .$img);
		Image::make($image)->save($location);
		$blogcategory->image 	= $img;
  }

		$blogcategory->save();

		session()->flash('success','Category Update successfully!!');
		return redirect()->route('admin.blogcategory.create');
	}

	public function delete($id)
	{

		$blogcategory = Blogcategory::find($id);

		if(!is_null($blogcategory)){
			if (File::exists('images/blogcategories/' .$blogcategory->image)) {
			File::delete('images/blogcategories/' .$blogcategory->image);
		}

		$blogcategory->delete();
		}
		session()->flash('success','Category has delete successfully!!');
		return back();
	}
}
