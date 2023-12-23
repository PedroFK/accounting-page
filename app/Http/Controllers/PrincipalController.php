<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactReason;


class PrincipalController extends Controller
{
    public function index() {
        $contact_reasons = ContactReason::all();

        return view('site.principal', ['contact_reasons' => $contact_reasons]);
    }
}
