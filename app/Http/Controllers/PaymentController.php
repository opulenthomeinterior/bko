<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    //
    public function authToken()
    {
        $credentials = base64_encode('q1ZJUFR2cu6Xxjey:70aSaPn7y2HSZVTkeFEzgp4pn3CWIbNH7dLHOw6KJgz4jT2PbcdoVa4P0xubOv6Z');
        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . $credentials,
            'Content-Type' => 'application/vnd.worldpay.payment_pages-v1.hal+json',
            'Accept' => 'application/vnd.worldpay.payment_pages-v1.hal+json',
        ])->post('https://try.access.worldpay.com/payment_pages', [
            "transactionReference" => "MyTransaction123",
            "merchant" => [
                "entity" => "POxxxxxxxxx"
            ],
            "narrative" => [
                "line1" => "Mind Palace Ltd"
            ],
            "value" => [
                "currency" => "GBP",
                "amount" => 123
            ]
        ]);
        dd(json_decode($response->body()));
    }
}
