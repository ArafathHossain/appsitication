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
use Image;
use File;

class OurTeamController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
	{
		$our_teams = our_team::orderBy('id', 'desc')->paginate(10);
		return view('admin.pages.our_team_create', compact('our_teams'));
	}


	public function store(Request $request)
	{

		$request->validate([
			
			'name'       => 'required|max:150',
			'image'      => 'required',
			'position'   => 'required',
			'facebook'   => 'nullable',
			'twitter'    => 'nullable',
			'linkedin'   => 'nullable',
			'googleplus' => 'nullable',
			'instagram'  => 'nullable',
		]);


		$our_team 					= new our_team;
		$our_team->name 			= $request->name;
		$our_team->position 		= $request->position;
		$our_team->facebook 		= $request->facebook;
		$our_team->twitter 		    = $request->twitter;
		$our_team->linkedin 		= $request->linkedin;
		$our_team->googleplus 		= $request->googleplus;
		$our_team->instagram 		= $request->instagram;
		// images also insert image

		// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image)->save($location);
		$our_team->image 	= $img;
    }
		// 1st image insert end
		$our_team->save();


		session()->flash('success','Member insert successfully!!');
		return redirect()->route('admin.our_team.create');



	}

	public function edit($id)
	{
	    
		$our_teams = our_team::find($id);
		return view('admin.pages.our_team_edit', compact('our_teams'));
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'name'       => 'required|max:150',
			'image'      => 'nullable',
			'position'   => 'required',
			'facebook'   => 'nullable',
			'twitter'    => 'nullable',
			'linkedin'   => 'nullable',
			'googleplus' => 'nullable',
			'instagram'  => 'nullable',

		]);


		$our_teams = our_team::find($id);


		$our_team 				    = new our_team;
		$our_team->name 		    = $request->name;
		$our_team->posirion 		= $request->position;
		$our_team->facebook 		= $request->facebook;
		$our_team->twitter 		    = $request->twitter;
		$our_team->linkedin 		= $request->linkedin;
		$our_team->googleplus 		= $request->googleplus;
		$our_team->instagram 		= $request->instagram;

		//Delete the old image from folder
    if(($request->image > 0)){
		if (File::exists('images/products/' .$our_teams->image)) {
			File::delete('images/products/' .$our_teams->image);
		}
  }
		// 1st image insert start
    if(($request->image > 0)){
		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/products/' .$img);
		Image::make($image)->save($location);
		$our_teams->image 	= $img;
    }
		// 1st image insert end
		$our_teams->save();

		session()->flash('success','Member Update successfully!!');
		return redirect()->route('admin.our_team.create');
	}

	public function delete($id)
	{

		$our_teams = our_team::find($id);

		if(!is_null($our_teams)){
			if (File::exists('images/products/' .$our_teams->image)) {
			File::delete('images/products/' .$our_teams->image);
		}
		$our_teams->delete();
		}
		session()->flash('success','Member has delete successfully!!');
		return back();
	}
	
}
