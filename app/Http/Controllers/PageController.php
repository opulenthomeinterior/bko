<?php

namespace App\Http\Controllers;

use App\Models\Style;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function superGlossWhite()
    {
        $categories = Category::where('status', 1)->get();
        $styles = Style::where('status', 1)->get();
        return view('pages.super-gloss-white', compact('categories', 'styles'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function sendInquiry(Request $request)
    {
    }
        
}
