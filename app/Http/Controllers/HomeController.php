<?php

namespace App\Http\Controllers;
use App\Models\Bet;

class HomeController extends Controller
{
    public function index()
    {
        $bets = Bet::all();
        return view('home',['bets'=>$bets]);
    }
}
