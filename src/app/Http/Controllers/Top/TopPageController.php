<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopPageController extends Controller
{
    public function showTop()
    {
        return view('top.top');
    }
    
}
