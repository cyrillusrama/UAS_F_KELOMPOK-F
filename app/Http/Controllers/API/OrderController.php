<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'booking_location'  => 'bail|required',
            'booking_date'      => 'bail|required',
            'first_name'        => 'bail|required',
            'last_name'         => 'bail|required',
            'phone'             => 'bail|required',
            'address'           => 'bail|required'
        ]);

        try {
            Booking::create([
                'paket_wisata_id'   => $validated['booking_location'],
                'user_id'           => 1,
                'booking_date'      => $validated['booking_date'],
                'first_name'        => $validated['first_name'],
                'last_name'         => $validated['last_name'],
                'phone'             => $validated['phone'],
                'address'           => $validated['address']
            ]);

            return response()->json([
                'success'   => [
                    'message' =>  "Pesanan Anda Sedang Di Proses!"
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'errors'   => [
                    'system' => $e->getMessage()
                ]
            ], 400);
        }
    }

    public function history()
    {
        $orders = Booking::get();

        return response()->json([
            'data' => $orders
        ]);
    }

    public function delete($id)
    {
        $order = Booking::findOrFail($id);

        try {
            $order->delete();

            return response()->json([
                'success' => [
                    "message" => "Pesanan Berhasil Dihapus"
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "errors" => [
                    "message" => $e->getMessage()
                ]
            ], 400);
        }
    }

    public function show($id)
    {

        $order = Booking::findOrFail($id);

        return response()->json([
            'data' => $order
        ]);
    }

    public function update(Request $request, $id)
    {

        $order = Booking::findOrFail($id);

        $validated = $request->validate([
            'booking_location'  => 'bail|required',
            'booking_date'      => 'bail|required',
            'first_name'        => 'bail|required',
            'last_name'         => 'bail|required',
            'phone'             => 'bail|required',
            'address'           => 'bail|required'
        ]);

        try {
            $order->update([
                'paket_wisata_id'   => $validated['booking_location'],
                'user_id'           => 1,
                'booking_date'      => $validated['booking_date'],
                'first_name'        => $validated['first_name'],
                'last_name'         => $validated['last_name'],
                'phone'             => $validated['phone'],
                'address'           => $validated['address']
            ]);

            return response()->json([
                'success' => [
                    'message' => 'Update Pesanan Berhasil!'
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'errors'   => [
                    'system' => $e->getMessage()
                ]
            ], 400);
        }

        dd($order);
    }
}
