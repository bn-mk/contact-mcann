<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Interfaces\ContactFormInterface;

class ContactController extends Controller
{
    public function show(ContactFormInterface $form)
    {
        /**
         * @var DatabaseFormHandler $form
         */
        return view('contact-form', ['blah' => $form->blah()]);
    }

    public function store(StoreContactRequest $request, ContactFormInterface $form)
    {
        $validated_form_data = $request->validated();
    }
}
