<?php

use App\Models\User;

function users()
{
    $users = User::all()->count();
    return $users;
}