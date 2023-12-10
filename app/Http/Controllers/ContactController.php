<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;
use App\Models\ContactReason;

class ContactController extends Controller
{
    public function contact(Request $request) {
        $contact_reasons = ContactReason::all();
        
        return view('site.contact', ['titulo' => 'contact (teste)', 'contact_reasons' => $contact_reasons]);

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

    public function save(Request $request) {
        $request->validate([
            'name'           => 'required|string|max:40|unique:site_contacts,name',
            'phone_1'       => 'required|string|max:12',
            'email'          => 'required|email',
            'contact_reason_id' => 'required|string|exists:contact_reasons,id',
            'message'       => 'required|string|max:255',
        ]);
    }
}
