<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class AdminController extends Controller
{
    public function index()
    {
    	return view('backend.admin.pages.index');
    }
}
