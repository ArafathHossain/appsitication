<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use Image;
use File;

class BrandController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
	{

		$brands = Brand::orderBy('id', 'desc')->paginate(10);
		return view('admin.pages.brand_create', compact('brands'));
	}

	public function store(Request $request)
	{

		$request->validate([
			'name' => 'nullable',
			'type' => 'required',
			'image' => 'nullable|image',
			'description' => 'nullable',
		]);

		$brand 				= new Brand();
		$brand->name 		= $request->name;
		$brand->type 		= $request->type;
		$brand->description 	= $request->description;

		// images also insert image
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/brands_image/' .$img);
		Image::make($image)->save($location);
		$brand->image 	= $img;
  }
		$brand->save();

		session()->flash('success','Content insert successfully!!');
		return redirect()->route('admin.brand.create');
	}

	public function edit($id)
	{
		$brand = Brand::find($id);
		return view('admin.pages.brand_edit')->with('brand', $brand);
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'name' => 'nullable',
			'type' => 'required',
			'image' => 'nullable|image',
			'description' => 'nullable',
		]);


		$brand = Brand::find($id);

		$brand->name 		= $request->name;
		$brand->type 		= $request->type;
		$brand->description 	= $request->description;

		//Delete the old image from folder
    if(($request->image > 0)){
		if (File::exists('images/brands_image/' .$brand->image)) {
			File::delete('images/brands_image/' .$brand->image);
		}

		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/brands_image/' .$img);
		Image::make($image)->save($location);
		$brand->image 	= $img;
  }

		$brand->save();

		session()->flash('success','Content Update successfully!!');
		return redirect()->route('admin.brand.create');
	}

	public function delete($id)
	{

		$brand = Brand::find($id);

		if(!is_null($brand)){
			if (File::exists('images/brands_image/' .$brand->image)) {
			File::delete('images/brands_image/' .$brand->image);
		}

		$brand->delete();
		}
		session()->flash('success','Content has delete successfully!!');
		return back();
	}

}
