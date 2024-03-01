<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RoleUserController extends Controller
{
    public function index()
    {
        $usersWithRoles = User::with('roles')->get();

        return view('roles-and-users', ['usersWithRoles' => $usersWithRoles]);
    }
}
