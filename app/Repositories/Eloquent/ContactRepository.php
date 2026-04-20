<?php

namespace App\Repositories\Eloquent;

use App\Models\Contact;
use App\Repositories\Interfaces\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{
    public function all()
    {
        return Contact::latest()->get();
    }

    public function create(array $data): Contact
    {
        return Contact::create($data);
    }

    public function find($id)
    {
        return Contact::findOrFail($id);
    }

    public function delete(Contact $contact): bool
    {
        return $contact->delete();
    }
}
