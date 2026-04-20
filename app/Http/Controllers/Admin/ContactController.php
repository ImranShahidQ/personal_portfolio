<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\ContactService;

class ContactController extends Controller
{
    protected ContactService $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $messages = $this->contactService->getAllMessages();
        return view('admin.contacts.index', compact('messages'));
    }

    public function show($id)
    {
        $message = $this->contactService->getMessageById($id);
        return view('admin.contacts.show', compact('message'));
    }

    public function destroy(Contact $contact)
    {
        $this->contactService->deleteMessage($contact);
        return back()->with('success', 'Message deleted');
    }
}
