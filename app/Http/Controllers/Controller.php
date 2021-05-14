<?php

namespace App\Http\Controllers;

use App\Models\Dompets;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Point;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
        return view('welcome');
    }


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
        $saldo = Dompets::find(Auth::user()->id);
        return view('topUp',compact('saldo'));
    }

    public function topUp_process(Request $request)
    {   
        $saldo = Dompets::find(Auth::user()->id);
        $saldo->saldo += $request->topup;
        $saldo->save();
        return redirect(route('verification'));
    }

    public function verification()
    {   
        $saldo = Dompets::find(Auth::user()->id);
        return view('verification',compact('saldo'));
    }

    public function successTopUp()
    {   
        $saldo = Dompets::find(Auth::user()->id);
        return view('successTopUp',compact('saldo'));
    }

}
