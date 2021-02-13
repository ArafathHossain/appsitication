<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\blogproduct;
use App\blogproduct_images;
use App\blogroduct;
use App\blog_blogproduct_images;
use App\Sub_category;
use App\Category;
use App\blogcategory;
use App\Brand;
use Image;
use File;

class AdminblogproductController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }
        
  public function index() 

	{
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blogproduct = blogproduct::orderBy('id', 'desc')->paginate(10);
		return view('admin.pages.blogproduct_create', compact('blogproduct','blogcategories'));
	}
	        
	public function store(Request $request)
	{

		$request->validate([
			
			'blog_category_id' => 'nullable',
			'image' => 'nullable',
			'image2' => 'nullable',
			'image3' => 'nullable',
			'description' => 'nullable',
			'title' => 'required|max:150',
			
		]);

       
		$blogproduct 				= new blogproduct;
		
		$blogproduct->blog_category_id 	= $request->blog_category_id;
		$blogproduct->title 		= $request->title;
		$blogproduct->slug 			= str_slug($request->title);
		$blogproduct->admin_id 		= 1;
		$blogproduct->status 		= $request->status;
		$blogproduct->description 		= $request->description;


		// images also insert image

		// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/blogproducts/' .$img);
		Image::make($image)->save($location);
		$blogproduct->image 	= $img;
    }
		// 1st image insert end

		// 2nd image insert start
    if(($request->image2 > 0)){
		$image2 = $request->file('image2');
		$img = time()+2 . '.' . $image2->getClientOriginalExtension();
		$location = public_path('images/blogproducts/' .$img);
		Image::make($image2)->save($location);
		$blogproduct->image2 	= $img;
    }
		// 2nd image insert end

		// 3th image insert start
    if(($request->image3 > 0)){
		$image3 = $request->file('image3');
		$img = time()+3 . '.' . $image3->getClientOriginalExtension();
		$location = public_path('images/blogproducts/' .$img);
		Image::make($image3)->save($location);
		$blogproduct->image3 	= $img;
    }
		// 3th image insert end

		$blogproduct->save();


		session()->flash('success','blogproduct insert successfully!!');
		return redirect()->route('admin.blogproduct.create');



	}

	public function edit($id)
	{

		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blogproduct = blogproduct::find($id);
		return view('admin.pages.blogproduct_edit', compact('blogproduct','blogcategories',));
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'blog_category_id' => 'required',
			'image' => 'nullable',
			'image2' => 'nullable',
			'image3' => 'nullable',
			'description' => 'nullable',
			'title' => 'required|max:150',

		]);


		$blogproduct = blogproduct::find($id);


		$blogproduct->blog_category_id 	= $request->blog_category_id;
		$blogproduct->title 		= $request->title;
		$blogproduct->slug 			= str_slug($request->title);
		$blogproduct->admin_id 		= 1;
		$blogproduct->status 		= $request->status;
		$blogproduct->description 		= $request->description;

		//Delete the old image from folder
    if(($request->image > 0)){
		if (File::exists('images/blogproducts/' .$blogproduct->image)) {
			File::delete('images/blogproducts/' .$blogproduct->image);
		}
  }
  if(($request->image2 > 0)){
		if (File::exists('images/blogproducts/' .$blogproduct->image2)) {
			File::delete('images/blogproducts/' .$blogproduct->image2);
		}
  }
  if(($request->image3 > 0)){
		if (File::exists('images/blogproducts/' .$blogproduct->image3)) {
			File::delete('images/blogproducts/' .$blogproduct->image3);
		}
  }

		// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/blogproducts/' .$img);
		Image::make($image)->save($location);
		$blogproduct->image 	= $img;
    }
		// 1st image insert end

		// 2nd image insert start
    if(($request->image2 > 0)){
		$image2 = $request->file('image2');
		$img = time()+2 . '.' . $image2->getClientOriginalExtension();
		$location = public_path('images/blogproducts/' .$img);
		Image::make($image2)->save($location);
		$blogproduct->image2 	= $img;
    }
		// 2nd image insert end

		// 3th image insert start
    if(($request->image3 > 0)){
		$image3 = $request->file('image3');
		$img = time()+3 . '.' . $image3->getClientOriginalExtension();
		$location = public_path('images/blogproducts/' .$img);
		Image::make($image3)->save($location);
		$blogproduct->image3 	= $img;
    }
		// 3th image insert end

		$blogproduct->save();

		session()->flash('success','blogproduct Update successfully!!');
		return redirect()->route('admin.blogproduct.create');
	}

	public function delete($id)
	{

		$blogproduct = blogproduct::find($id);

		if(!is_null($blogproduct)){
			if (File::exists('images/blogproducts/' .$blogproduct->image)) {
			File::delete('images/blogproducts/' .$blogproduct->image);
		}
		if (File::exists('images/blogproducts/' .$blogproduct->image2)) {
			File::delete('images/blogproducts/' .$blogproduct->image2);
		}
		if (File::exists('images/blogproducts/' .$blogproduct->image3)) {
			File::delete('images/blogproducts/' .$blogproduct->image3);
		}

		$blogproduct->delete();
		}
		session()->flash('success','blogproduct has delete successfully!!');
		return back();
	}
	
}
