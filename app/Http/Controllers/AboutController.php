<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function addAbout()
    {
        $about = new About;
        return view('pages.about', ['data' => $about->all()]);
    }
}
