<?php

namespace App\Http\Controllers;

use App\Models\NationalCode;
use App\Models\User;
use Illuminate\Http\Request;

class NationalCodeController extends Controller
{
    public function relation()
    {
        $user = User::find(61);
        $nationalCode = NationalCode::find(1);
//        return $user->nationalCode;
        return $nationalCode->user;
    }
}
