<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Activity;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $teams = Team::all();
        $activities = Activity::all();
        return view('welcome', [
            'teams' => $teams,
            'activities' => $activities,
        ]);
    }
}
