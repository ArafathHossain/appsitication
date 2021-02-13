<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Image;
use File;

class SliderController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
	{

		$sliders = Slider::orderBy('id', 'desc')->get();
		return view('admin.pages.slider_create', compact('sliders'));
	}

	public function store(Request $request)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image',
		]);

		$slider 				= new Slider();
		$slider->name 		= $request->name;

		// images also insert image
    if(($request->image > 0)){
      $image = $request->file('image');
  		$img = time() . '.' . $image->getClientOriginalExtension();
  		$location = public_path('images/slider/' .$img);
  		Image::make($image)->save($location);
  		$slider->image 	= $img;
      }


		$slider->save();

		session()->flash('success','Slider insert successfully!!');
		return redirect()->route('admin.slider.create');
	}

	public function edit($id)
	{
		$slider = Slider::find($id);
		return view('admin.pages.slider_edit')->with('slider', $slider);
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'name' => 'required',
			'image' => 'nullable|image',
		]);


		$slider = Slider::find($id);

		$slider->name 		= $request->name;

		//Delete the old image from folder
if(($request->image > 0)){
		if (File::exists('images/slider/' .$slider->image)) {
			File::delete('images/slider/' .$slider->image);
		}


		$image = $request->file('image');
		$img = time() . '.' . $image->getClientOriginalExtension();
		$location = public_path('images/slider/' .$img);
		Image::make($image)->save($location);
		$slider->image 	= $img;
  }

		$slider->save();

		session()->flash('success','Slider Update successfully!!');
		return redirect()->route('admin.slider.create');
	}

	public function delete($id)
	{

		$slider = Slider::find($id);

		if(!is_null($slider)){
			if (File::exists('images/slider/' .$slider->image)) {
			File::delete('images/slider/' .$slider->image);
		}

		$slider->delete();
		}
		session()->flash('success','Slider has delete successfully!!');
		return back();
	}
}
