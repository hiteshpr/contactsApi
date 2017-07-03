<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function show($id)
    {
    	
     $Contact = Contact::with('user')->find($id);
     return $Contact->toJson();

    }
}
