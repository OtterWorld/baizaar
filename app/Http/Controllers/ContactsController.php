<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(Contact $contact) {
        
        $contacts = $contact
            ->first();

        return view('contacts.index', compact('contacts'));
    }
}
