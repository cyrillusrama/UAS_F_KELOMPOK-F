<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function destination()
    {

        $paketWisata = PaketWisata::all();

        return response()->json([
            'data' => $paketWisata
        ]);
    }
}
