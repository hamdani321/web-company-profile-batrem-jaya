<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersServices {
    public function createUsers(array $dataUser)  {
        return DB::transaction(function() use ($dataUser) {
            $dataUserCollection = collect($dataUser);
            $user = User::create($dataUserCollection->except('role')->toArray());
            $user->assignRole($dataUserCollection->get('role'));
        return $user;
        });
    }

    public function getUsers() {
        return User::paginate(5);
    }
}