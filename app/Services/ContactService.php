<?php

namespace App\Services;

use App\Repositories\Interfaces\ContactRepositoryInterface;

class ContactService
{
    protected ContactRepositoryInterface $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function storeMessage(array $data)
    {
        return $this->contactRepository->create($data);
    }

    public function getAllMessages()
    {
        return $this->contactRepository->all();
    }

    public function getMessageById($id)
    {
        return $this->contactRepository->find($id);
    }

    public function deleteMessage($contact)
    {
        return $this->contactRepository->delete($contact);
    }
}
