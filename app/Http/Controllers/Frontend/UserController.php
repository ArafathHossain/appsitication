<?php

namespace App\Http\Controllers\Frontend;
use Auth;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

  // Gard  set start
  public function __construct()
  {
      $this->middleware('auth:web');
  }
  // Gard set end

   public function dashboard()
   {
     $user = Auth::user();
     return view('frontend.user.dashboard', compact('user'));
   }
}
