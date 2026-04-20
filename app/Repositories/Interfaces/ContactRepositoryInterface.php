<?php

namespace App\Repositories\Interfaces;

use App\Models\Contact;

interface ContactRepositoryInterface
{
    public function all();
    public function create(array $data): Contact;
    public function find($id);
    public function delete(Contact $contact): bool;
}
