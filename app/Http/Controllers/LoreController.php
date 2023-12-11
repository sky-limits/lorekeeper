<?php

namespace App\Http\Controllers;

use Auth;
use db;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SitePage;

class LoreController extends Controller
{
    public function getAnynamehere1()
    {
    return view('pages.filename');
    }
    
}