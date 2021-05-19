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
        return view('users.findData', compact('point'));
    }

    public function findMaps($id, Request $request)
    {
        $point = Point::find($id);
        return view('users.findMaps', compact('point'));
    }

    public function transactionProcess(Request $request)
    {
        $transaction = new Transaction();
        $transaction->location = $request->location;
        $transaction->user = ""; // NANTI DI GANTI KALAU DAH ADA
        $transaction->car_type = $request->car_type;
        $transaction->license_plat = $request->license_plat;
        $transaction->date = date('Y-m-d H:i:s');
        if ($request->time === null) {
            $transaction->time = 200000;
        } else {
            $transaction->time = $request->time;
        }
        $transaction->save();

        return redirect(route('QRCode'));
    }

    public function QRcode()
    {
        $transaction = Transaction::all()->last();
        $saldo = Dompets::find(Auth::user()->id);
        return view('users.QRCode', compact('transaction', 'saldo'));
    }

    public function Receipt()
    {
        $transaction = Transaction::all()->last();
        $saldo = Dompets::find(Auth::user()->id);
        if ($saldo->saldo < $transaction->time) {
            return redirect(route('find'))->with('error', 'Saldo Tidak Cukup! Silahkan Top Up!');
        } else {
            $saldo->saldo -= $transaction->time;
            $saldo->save();
            return view('users.Receipt', compact('transaction','saldo'));
        }
    }

    public function topUp()
    {
        $saldo = Dompets::find(Auth::user()->id);
        return view('users.topUp', compact('saldo'));
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
        return view('users.verification', compact('saldo'));
    }

    public function successTopUp()
    {
        $saldo = Dompets::find(Auth::user()->id);
        return view('users.successTopUp', compact('saldo'));
    }

    public function transaction()
    {
        $transaction = Transaction::all();
        return view('users.transaction', compact('transaction'));
    }

    public function screening(){
        $transaction = transaction::all();
        return view('admin.screening', compact('transaction'));
    }

    public function history(){
        $transaction = transaction::all();
        return view('admin.history', compact('transaction'));
    }
}