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
use Carbon\Carbon;
use App\Models\Feedbacks;
use DateTime;

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

    public function homeSuccess()
    {
        return view('users.home')->with(['success' => 'Pesan Berhasil']);
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
        $transaction->user = $request->user;
        $transaction->car_type = $request->car_type;
        $transaction->license_plat = $request->license_plat;

        if ($request->time === null) {
            $transaction->time = 200000;
        } else {
            $transaction->time = $request->time;
        }
        $minutes = (int)$transaction->time / 2500;

        $newDateTime = Carbon::now()->addMinute($minutes);
        $transaction->selesai = $newDateTime;
        $transaction->status = "Progress";
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
            $transaction->status = "Canceled";
            $transaction->save();
            return redirect(route('find'))->with('error', 'Saldo Tidak Cukup! Silahkan Top Up!');
        } else {
            $saldo->saldo -= $transaction->time;
            $saldo->save();
            return view('users.Receipt', compact('transaction', 'saldo'));
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
        return view('users.history', compact('transaction'));
    }

    public function screening()
    {
        $transaction = transaction::all();
        $saldo = Dompets::find(Auth::user()->id);
        return view('admin.screening', compact('transaction', 'saldo'));
    }

    public function transaction_view()
    {
        $transaction = transaction::all();
        $saldo = Dompets::find(Auth::user()->id);
        return view('users.screening', compact('transaction', 'saldo'));
    }

    public function user_orderProcess(Request $request)
    {
        $transaction = Transaction::find($request->id);
        $transaction->status = "Completed";
        $transaction->save();

        return redirect(route('screening'));
    }

    public function history()
    {
        $transaction = transaction::all();
        $saldo = Dompets::find(Auth::user()->id);
        return view('admin.history', compact('transaction', 'saldo'));
    }

    public function orderProcess(Request $request)
    {
        $transaction = Transaction::find($request->id);
        $transaction->status = "Completed";
        $transaction->save();

        return redirect(route('admin.screening'));
    }

    public function confirmation()
    {
        return view('users/confirmation');
    }

    public function chargeStatus()
    {
        return view('users/chargeStatus');
    }

    public function addDompet(Request $request)
    {
        $dompet = new Dompets();
        $dompet->id = $request->id;
        $dompet->user_id = $request->id;
        $dompet->saldo = 0;
        $dompet->save();


        return redirect(route('home'));
    }

    public function feedback()
    {
        return view('users.feedback');
    }

    public function feedback_process(Request $request)
    {
        $feedback = new Feedbacks();
        $feedback->user_id = $request->user_id;
        $feedback->feedback = $request->feedback;
        $feedback->rating = $request->rate;
        $feedback->save();

        return view('users.feedbackSuccess');
    }

    public function feedback_list()
    {
        $feedback = Feedbacks::all();
        $user = User::all();
        return view('admin.feedback',compact('feedback','user'));
    }
}
