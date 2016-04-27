<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthManager $auth)
    {
        $user = $auth->user();

        if (count($user->goals) === 0) {
            return view('pages.getting_started');
        }

        return view('pages.dashboard');
    }


}
