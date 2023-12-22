<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AccessLoginMidd;

class AboutUsController extends Controller
{
    public function aboutUs() {
        return view('site.about-us');
    }
}
