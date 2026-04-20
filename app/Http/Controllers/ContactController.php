<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\StoreContactRequest;
use App\Services\ContactService;

class ContactController extends Controller
{
    protected ContactService $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function create()
    {
        return view('contact');
    }

    public function store(StoreContactRequest $request)
    {
        $this->contactService->storeMessage($request->validated());

        return back()->with('success', 'Message sent successfully!');
    }
}
