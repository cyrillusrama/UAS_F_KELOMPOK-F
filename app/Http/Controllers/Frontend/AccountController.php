<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('frontend.account');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('frontend.users_edit');
    }
}
