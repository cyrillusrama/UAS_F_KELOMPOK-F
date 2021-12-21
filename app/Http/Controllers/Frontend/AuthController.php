<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    /**
     * Get login page
     *
     * @return View
     */
    public function loginPage(): View
    {
        return view('frontend.login');
    }

    /**
     * Get register page
     *
     * @return View
     */
    public function registerPage(): View
    {
        return view('frontend.register');
    }
}
