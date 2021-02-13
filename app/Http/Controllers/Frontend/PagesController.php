<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Sub_category;
use App\Product;
use App\blogcategory;
use App\blogproduct;
use App\blog_comment;
use App\Brand;
use App\portfolio;
use App\our_team;
use App\client_review;
use DB;
use Illuminate\Support\Str;

class PagesController extends Controller
{

	public function index()
	{
		$subcategories = Sub_category::orderBy('id', 'asc')->get();
		$sliders = Slider::orderBy('id', 'desc')->get();
		$products = Product::orderBy('id', 'desc')->get();
		$brands =  Brand::where('type', 'Home')->orderBy('id', 'desc')->get();
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blogproducts = blogproduct::orderBy('id', 'desc')->limit(3)->get();
		$blogproducts2 = blogproduct::orderBy('id', 'desc')->take(2)->get();
		return view('pages.index', compact('sliders','blogcategories','blogproducts','blogproducts2', 'subcategories', 'products', 'brands'));
	}
	
	
	public function products_details($slug)
	{
	
		$subcategories = Sub_category::orderBy('id', 'asc')->get();
		$Product_detail = Product::where('slug', $slug)->first();
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blogproducts = blogproduct::orderBy('id', 'desc')->get();
		$blogproducts2 = blogproduct::orderBy('id', 'desc')->take(2)->get();
		return view('pages.services', compact('blogcategories','blogproducts','blogproducts2','subcategories', 'Product_detail'));
	}
	
	
	
	public function about()
	{
	$subcategories = Sub_category::orderBy('id', 'asc')->get();
		$sliders = Slider::orderBy('id', 'desc')->get();
		$products = Product::orderBy('id', 'desc')->get();
		$brands =  Brand::where('type', 'Home')->orderBy('id', 'desc')->get();
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blogproducts = blogproduct::orderBy('id', 'desc')->get();
		$blogproducts2 = blogproduct::orderBy('id', 'desc')->take(2)->get();
		$our_teams = our_team::orderBy('id', 'desc')->get();
		$client_reviews = client_review::orderBy('id', 'desc')->get();
	return view ('pages.about', compact('blogcategories','blogproducts','blogproducts2','sliders', 'subcategories', 'products', 'brands','our_teams','client_reviews'));
	}
	
	public function blog()
	{
		$subcategories = Sub_category::orderBy('id', 'asc')->get();
		$sliders = Slider::orderBy('id', 'desc')->get();
		$products = Product::orderBy('id', 'desc')->get();
		$brands =  Brand::where('type', 'Home')->orderBy('id', 'desc')->get();
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blogproducts = blogproduct::orderBy('id', 'desc')->paginate(5);
		$blogproducts2 = blogproduct::orderBy('id', 'desc')->take(2)->get();
		$blogproducts3 = blogproduct::orderBy('id', 'desc')->take(5)->get();
		
	return view ('pages.blog', compact('blogcategories', 'blogproducts', 'blogproducts2','blogproducts3','sliders', 'subcategories', 'products', 'brands'));
			
	}
	
	public function portfolio()
	{
		$subcategories = Sub_category::orderBy('id', 'asc')->get();
		$sliders = Slider::orderBy('id', 'desc')->get();
		$products = Product::orderBy('id', 'desc')->get();
		$brands =  Brand::where('type', 'Home')->orderBy('id', 'desc')->get();
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blogproducts = blogproduct::orderBy('id', 'desc')->paginate(5);
		$blogproducts2 = blogproduct::orderBy('id', 'desc')->take(2)->get();
		$blogproducts3 = blogproduct::orderBy('id', 'desc')->take(5)->get();
	return view ('pages.portfolio', compact('blogcategories', 'blogproducts', 'blogproducts2','blogproducts3','sliders', 'subcategories', 'products', 'brands'));
	}
	
	       
	
	public function blog_details($slug)
	{           
		$subcategories = Sub_category::orderBy('id', 'asc')->get();
		$sliders = Slider::orderBy('id', 'desc')->get();
		$products = Product::orderBy('id', 'desc')->get();
		$brands =  Brand::where('type', 'Home')->orderBy('id', 'desc')->get();
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blog_detail = blogproduct::where('slug', $slug)->first();
		$blogproducts = blogproduct::orderBy('id', 'desc')->get();
		$blogproducts2 = blogproduct::orderBy('id', 'desc')->take(2)->get();
		$blog_comments = blog_comment::where('id', 'desc')->get();
		$blog_comments = blog_comment::where('blog_id', $slug)->orderBy('id', 'asc')->get();
		
		
		return view('pages.blog_details', compact('blogcategories','blogproducts','blogproducts2', 'blog_detail','sliders', 'subcategories', 'products', 'brands', 'blog_comments'));
	}
	
	public function comment_store(Request $request)
	{

		$blog_comment 				= new blog_comment();
		$blog_comment->name 		= $request->name;
		$blog_comment->email_id 		= $request->email_id;
		$blog_comment->blog_id 		= $request->blog_id;
		$blog_comment->description 	= $request->details;   
		$blog_comment->save();

		session()->flash('success','Comment insert successfully!!');
		return back();
	}
	
	public function category_wise_blog($id)
	{           
		$subcategories = Sub_category::orderBy('id', 'asc')->get();
		$sliders = Slider::orderBy('id', 'desc')->get();
		$products = Product::orderBy('id', 'desc')->get();
		$brands =  Brand::where('type', 'Home')->orderBy('id', 'desc')->get();
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$category_wise_blog_detail = blogproduct::where('blog_category_id', $id)->get();
		$blogproducts = blogproduct::orderBy('id', 'desc')->get();
		$blogproducts2 = blogproduct::orderBy('id', 'desc')->take(2)->get();
		return view('pages.category_wise_blog', compact('blogcategories','blogproducts','blogproducts2', 'category_wise_blog_detail','sliders', 'subcategories', 'products', 'brands'));
	}
	
	
	public function contact()
	{
		$subcategories = Sub_category::orderBy('id', 'asc')->get();
		$sliders = Slider::orderBy('id', 'desc')->get();
		$products = Product::orderBy('id', 'desc')->get();
		$brands =  Brand::where('type', 'Home')->orderBy('id', 'desc')->get();
		$blogcategories = blogcategory::orderBy('id', 'desc')->get();
		$blogproducts = blogproduct::orderBy('id', 'desc')->get();
		$blogproducts2 = blogproduct::orderBy('id', 'desc')->take(2)->get();
	return view ('pages.contact', compact('blogcategories','blogproducts','blogproducts2','sliders', 'subcategories', 'products', 'brands'));
	}


	
	 
	 
	 public function Product_search(Request $request){

		$header_search_value = $request->header_search_value;
		$products = Product::orWhere('title', 'like', '%'.$header_search_value.'%')->orderBy('title', 'asc')->get();
		
		return view('pages.product_searching', compact('header_search_value', 'products'));
     }
	 
	 
}
