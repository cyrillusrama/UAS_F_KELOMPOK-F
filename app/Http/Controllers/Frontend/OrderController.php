<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('frontend.order');
    }

    public function edit($id)
    {
        Booking::findOrFail($id);
        return view('frontend.order');
    }
}
