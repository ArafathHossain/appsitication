<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

  // Gard  set start
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
  // Gard set end

   public function index()
	{
		return view('admin.pages.dashboard');
	}


}
