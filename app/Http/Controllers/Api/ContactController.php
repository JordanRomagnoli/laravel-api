<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

//Helpers
use Illuminate\Support\Facades\Mail;

//Form Request
use App\Http\Requests\StoreContactRequest as ContactStoreRequest;

//Mailable
use App\Mail\NewContact;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request){

        $contact = Contact::create($request->validated());

        Mail::to('jordan@boolean.it')->send(new NewContact($contact));
        
        return response()->json([
            'success' => true,
            'message'=> 'Contatto salvato con successo',
        ]);
    }
}
