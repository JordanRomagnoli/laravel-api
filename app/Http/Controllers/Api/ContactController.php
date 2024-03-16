<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

//Form Request
use App\Http\Requests\StoreContactRequest as ContactStoreRequest;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request){

        $contact = Contact::create($request->validated());
        
        return response()->json([
            'success' => true,
            'message'=> 'Contatto salvato con successo',
        ]);
    }
}