<?php

namespace App\Services;

class User
{
    protected $storage;

    public function __construct(SessionStorage $storage)
    {
        $this->storage = $storage;
    }

    public function setLanguage($language)
    {
        $this->storage->set('language', $language);
    }

    public function getLanguage()
    {
        return $this->storage->get('language');
    }
}