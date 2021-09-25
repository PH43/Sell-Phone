<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\brands;
use App\Models\categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('content/body/body');
    }
  
}
