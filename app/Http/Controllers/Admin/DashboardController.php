<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
       $product = Product::all();
       return view("admin.dashboard",compact("product"));
   }
}
