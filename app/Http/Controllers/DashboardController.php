<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Goal;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthManager $auth)
    {
        $user = $auth->user();

        if (count($user->goals) === 0) {
            return $this->showGettingStarted();
        }

        return view('pages.dashboard');
    }

    public function showGettingStarted()
    {
        $data = [
            'popularGoals' => [
                new Goal([
                    'id' => 1,
                    'name' => 'Eat all the cookies',
                    'category' => 'fitness',
                    'description' => 'they\'re fucking delicious',
                ]),
                new Goal([
                    'id' => 2,
                    'category' => 'personal',
                    'name' => 'Go for a run',
                    'description' => 'you ate all the cookies you fat fuck',
                ]),
                new Goal([
                    'id' => 3,
                    'category' => 'career',
                    'name' => 'Go home',
                    'description' => 'you\'re drunk',
                ]),
                new Goal([
                    'id' => 1,
                    'name' => 'Eat all the cookies',
                    'category' => 'fitness',
                    'description' => 'they\'re fucking delicious',
                ]),
                new Goal([
                    'id' => 2,
                    'category' => 'personal',
                    'name' => 'Go for a run',
                    'description' => 'you ate all the cookies you fat fuck',
                ]),
            ],
        ];

        return view('pages.getting_started')->with($data);
    }

}
