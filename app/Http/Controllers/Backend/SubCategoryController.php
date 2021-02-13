<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sub_category;
use App\Category;
use Image;
use File;

class SubCategoryController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }
  public function index()
	{
		$categories = Category::orderBy('name', 'desc')->get();
		$subcategories = Sub_category::orderBy('id', 'desc')->paginate(10);
		return view('admin.pages.subcategory_create', compact('subcategories','categories'));
	}



	public function store(Request $request)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image',
			'image2' => 'nullable',
		]);

		$subcategory 				= new Sub_category();
		$subcategory->name 			= $request->name;
		$subcategory->admin_id 		= 1;

		// images also insert image
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/subcategories/' .$img);
		Image::make($image)->save($location);
		$subcategory->image 	= $img;
  	}
	
		// 2nd image insert start
    if(($request->image2 > 0)){
		$image2 = $request->file('image2');
		$img = time()+2 . '.' . $image2->getClientOriginalExtension();
		$location = public_path('images/subcategories/' .$img);
		Image::make($image2)->save($location);
		$subcategory->image2 	= $img;
    }
		// 2nd image insert end

		$subcategory->save();

		session()->flash('success','Sub Category insert successfully!!');
		return redirect()->route('admin.subcategory.create');
	}

	public function edit($id)
	{
		$categories = Category::orderBy('name', 'desc')->get();
		$sub_category = Sub_category::find($id);
		return view('admin.pages.subcategory_edit', compact('sub_category','categories'));
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image',
			'image2' => 'nullable|image',
		]);


		$subcategory = Sub_category::find($id);

		$subcategory->name 			= $request->name;
		$subcategory->admin_id 		= 1;

		//Delete the old image from folder
		
		if(($request->image > 0)){
			if (File::exists('images/subcategories/' .$subcategory->image)) {
				File::delete('images/subcategories/' .$subcategory->image);
			}
  		}
 		 if(($request->image2 > 0)){
			if (File::exists('images/subcategories/' .$subcategory->image2)) {
				File::delete('images/subcategories/' .$subcategory->image2);
			}
  		}
		
			// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/subcategories/' .$img);
		Image::make($image)->save($location);
		$subcategory->image 	= $img;
    }
		// 1st image insert end

		// 2nd image insert start
    if(($request->image2 > 0)){
		$image2 = $request->file('image2');
		$img = time()+2 . '.' . $image2->getClientOriginalExtension();
		$location = public_path('images/subcategories/' .$img);
		Image::make($image2)->save($location);
		$subcategory->image2 	= $img;
    }
		// 2nd image insert end
		

		$subcategory->save();

		session()->flash('success','Sub Category Update successfully!!');
		return redirect()->route('admin.subcategory.create');
	}

	public function delete($id)
	{

		$subcategory = Sub_category::find($id);

		if(!is_null($subcategory)){
			if (File::exists('images/subcategories/' .$subcategory->image)) {
				File::delete('images/subcategories/' .$subcategory->image);
			}
			if (File::exists('images/subcategories/' .$subcategory->image2)) {
			File::delete('images/subcategories/' .$subcategory->image2);
		}

		$subcategory->delete();
		}
		session()->flash('success','Sub Category has delete successfully!!');
		return back();
	}
}
