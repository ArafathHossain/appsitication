<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Product_images;
use App\Sub_category;
use App\Category;
use App\our_team;
use App\Brand;
use App\client_review;
use Image;
use File;

class ClientReviewController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
	{
		$client_reviews = client_review::orderBy('id', 'asc')->paginate(10);
		return view('admin.pages.client_reviews_create', compact('client_reviews'));
	}


	public function store(Request $request)
	{

		$request->validate([
			
			'name'          => 'required|max:150',
			'image'         => 'required',
			'description'   => 'required',
			
		]);


		$client_review 					= new client_review;
		$client_review->name 			= $request->name;
		$client_review->description 	= $request->description;
		
		// images also insert image

		// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image)->save($location);
		$client_review->image 	= $img;
    }
		// 1st image insert end
		$client_review->save();


		session()->flash('success','Client Review insert successfully!!');
		return redirect()->route('admin.client_reviews.create');



	}

	public function edit($id)
	{
	    
		$client_reviews = client_review::find($id);
		return view('admin.pages.client_reviews_edit', compact('client_reviews'));
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'name'          => 'required|max:150',
			'image'         => 'nullable',
			'description'   => 'required',
			

		]);


		$client_reviews = client_review::find($id);


		$client_review 				    = new client_review;
		$client_reviews->name 		    = $request->name;
		$client_reviews->description 	= $request->description;
		

		//Delete the old image from folder
    if(($request->image > 0)){
		if (File::exists('images/products/' .$client_review->image)) {
			File::delete('images/products/' .$client_review->image);
		}     
  }
		// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image)->save($location);
		$client_reviews->image 	= $img;
    }
		// 1st image insert end
		$client_reviews->save();

		session()->flash('success','Client Review Update successfully!!');
		return redirect()->route('admin.client_reviews.create');
	}

	public function delete($id)
	{

		$client_reviews = client_review::find($id);

		if(!is_null($client_reviews)){
			if (File::exists('images/products/' .$client_reviews->image)) {
			File::delete('images/products/' .$client_reviews->image);
		}
		$client_reviews->delete();
		}
		session()->flash('success','Client Review delete successfully!!');
		return back();
	}
	
}
