<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExchangeRateController extends Controller
{
    public function getRate()
    {
        $rate =  Http::get('http://api.nbp.pl/api/exchangerates/tables/C')->json();
        
        return view('exchange', ['rate' => $rate]);
    }

    public function calcRate(Request $req)
    {
        $amount = $req->amount;
        $currency = $req->currency;
        $resultTable =  Http::get("http:/api.nbp.pl/api/exchangerates/rates/c/$currency/today/")->json();
        return view('calculate', ['resultTable' => $resultTable, 'currency' => $currency, 'amount' => $amount]);
    }
}
