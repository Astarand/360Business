<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blog(){
        return view('pages.blog');
    }
    public function BlogDetails(){
        return view('pages.blogdetails');
    }
}
