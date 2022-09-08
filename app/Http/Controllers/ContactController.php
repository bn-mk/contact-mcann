<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Interfaces\ContactFormInterface;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact-form');
    }

    public function store(StoreContactRequest $request, ContactFormInterface $form)
    {
        $validated_form_data = $request->validated();
    }
}
