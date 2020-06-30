<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class productController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
