<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): array
    {
        $users = User::where('id', '>=', 4)->paginate(3);

        return ['data' => $users];
    }

    public function show(User $user): User
    {
        return $user;
    }

    public function usersByCountry(string $country): User
    {
        return User::where('country', '=', $country)->get();
    }

    public function usersByAge(int $age): User
    {
        return User::where('age', '=', $age)->get();
    }
}
