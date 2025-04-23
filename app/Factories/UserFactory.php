<?php

namespace App\Factories;

use App\Models\User;

class UserFactory
{
    public function create(array $data)
    {
        return User::create($data);
    }
}
