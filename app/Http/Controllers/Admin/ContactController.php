<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Model
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){

        $contacts = Contact::all();

        return view("admin.contacts.index",compact("contacts"));
    }

    public function show(Contact $contact){

        return view("admin.contacts.show",compact("contact"));
    }
}
