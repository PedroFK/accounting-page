<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;
use App\Models\ContactReason;
use App\Http\Requests\StoreSiteContactRequest;
use App\Http\Resources\SiteContactResource;
use GuzzleHttp\Psr7\Response;

class SiteContactController extends Controller
{
    public function contact(Request $request) {
        $contact_reasons = ContactReason::all();
        
        return view('site.contact', ['title' => 'contact (teste)', 'contact_reasons' => $contact_reasons]);

        /*
        $request->all();
        Posso selecionar apenas um input
        $request->input('name');
        

        $contact = new SiteContact();
        $contact->fill($request->all());
        $contact->save();
        */
        //print_r($contact->getAttributes());



    }

    public function store(StoreSiteContactRequest $request) {
        SiteContact::create($request->all());
        return redirect()->route('site.index');
    }
}
