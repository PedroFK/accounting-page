<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AccessLogMiddleware;

class AboutUsController extends Controller
{
    public function __construct() {
        $this->middleware(AccessLogMiddleware::class);
    }

    public function aboutUs() {
        return view('site.about-us');
    }
}
