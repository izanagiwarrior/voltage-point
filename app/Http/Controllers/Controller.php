<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Point;
use App\Models\Transaction;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('home');
    }

    public function find()
    {
        $point = Point::all();
        return view('findData', compact('point'));
    }

    public function findMaps($id, Request $request)
    {
        $point = Point::find($id);
        return view('findMaps', compact('point'));
    }

    public function transactionProcess(Request $request)
    {
        $transaction = new Transaction();
        $transaction->location = $request->location;
        $transaction->user = ""; // NANTI DI GANTI KALAU DAH ADA
        $transaction->car_type = $request->car_type;
        $transaction->license_plat = $request->license_plat;
        $transaction->date = date('Y-m-d H:i:s');
        $transaction->time = $request->time;
        $transaction->save();

        return redirect(route('QRCode'));
        
    }

    public function QRcode()
    {
        return view('QRCode');
    }

    public function Receipt()
    {   
        $transaction = Transaction::all();
        return view('Receipt',compact('transaction'));
    }

    public function topUp()
    {   
        return view('topUp');
    }

    public function verification()
    {   
        return view('verification');
    }

    public function successTopUp()
    {   
        return view('successTopUp');
    }

}
