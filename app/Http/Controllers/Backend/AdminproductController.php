<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Product_images;
use App\Sub_category;
use App\Category;
use App\Brand;
use Image;
use File;

class AdminproductController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
	{
		$subcategories = Sub_category::orderBy('id', 'desc')->get();
		$products = Product::orderBy('id', 'desc')->paginate(10);
		return view('admin.pages.product_create', compact('products','subcategories'));
	}


	public function store(Request $request)
	{

		$request->validate([
			
			'sub_category_id' => 'required',
			'image' => 'nullable',
			'image2' => 'nullable',
			'image3' => 'nullable',
			'description' => 'nullable',
			'title' => 'required|max:150',
			
		]);


		$product 				= new Product;
		
		$product->sub_category_id 	= $request->sub_category_id;
		$product->title 		= $request->title;
		$product->slug 			= str_slug($request->title);
		$product->admin_id 		= 1;
		$product->status 		= $request->status;
		$product->description 		= $request->description;


		// images also insert image

		// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image)->save($location);
		$product->image 	= $img;
    }
		// 1st image insert end

		// 2nd image insert start
    if(($request->image2 > 0)){
		$image2 = $request->file('image2');
		$img = time()+2 . '.' . $image2->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image2)->save($location);
		$product->image2 	= $img;
    }
		// 2nd image insert end

		// 3th image insert start
    if(($request->image3 > 0)){
		$image3 = $request->file('image3');
		$img = time()+3 . '.' . $image3->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image3)->save($location);
		$product->image3 	= $img;
    }
		// 3th image insert end

		$product->save();


		session()->flash('success','Product insert successfully!!');
		return redirect()->route('admin.product.create');



	}

	public function edit($id)
	{

		$subcategories = Sub_category::orderBy('id', 'desc')->get();
		$product = Product::find($id);
		return view('admin.pages.product_edit', compact('product','subcategories',));
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'sub_category_id' => 'required',
			'image' => 'nullable',
			'image2' => 'nullable',
			'image3' => 'nullable',
			'description' => 'nullable',
			'title' => 'required|max:150',

		]);


		$product = Product::find($id);


		$product->sub_category_id 	= $request->sub_category_id;
		$product->title 		= $request->title;
		$product->slug 			= str_slug($request->title);
		$product->admin_id 		= 1;
		$product->status 		= $request->status;
		$product->description 		= $request->description;

		//Delete the old image from folder
    if(($request->image > 0)){
		if (File::exists('images/products/' .$product->image)) {
			File::delete('images/products/' .$product->image);
		}
  }
  if(($request->image2 > 0)){
		if (File::exists('images/products/' .$product->image2)) {
			File::delete('images/products/' .$product->image2);
		}
  }
  if(($request->image3 > 0)){
		if (File::exists('images/products/' .$product->image3)) {
			File::delete('images/products/' .$product->image3);
		}
  }

		// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image)->save($location);
		$product->image 	= $img;
    }
		// 1st image insert end

		// 2nd image insert start
    if(($request->image2 > 0)){
		$image2 = $request->file('image2');
		$img = time()+2 . '.' . $image2->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image2)->save($location);
		$product->image2 	= $img;
    }
		// 2nd image insert end

		// 3th image insert start
    if(($request->image3 > 0)){
		$image3 = $request->file('image3');
		$img = time()+3 . '.' . $image3->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image3)->save($location);
		$product->image3 	= $img;
    }
		// 3th image insert end

		$product->save();

		session()->flash('success','Product Update successfully!!');
		return redirect()->route('admin.product.create');
	}

	public function delete($id)
	{

		$product = Product::find($id);

		if(!is_null($product)){
			if (File::exists('images/products/' .$product->image)) {
			File::delete('images/products/' .$product->image);
		}
		if (File::exists('images/products/' .$product->image2)) {
			File::delete('images/products/' .$product->image2);
		}
		if (File::exists('images/products/' .$product->image3)) {
			File::delete('images/products/' .$product->image3);
		}

		$product->delete();
		}
		session()->flash('success','Product has delete successfully!!');
		return back();
	}
	
}
