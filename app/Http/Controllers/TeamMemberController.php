<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Team;


class TeamMemberController extends Controller
{
    public function index(Request $request)
    {
        DB::enableQueryLog();
        $data = DB::table('members')
            ->join('team_members', 'team_members.member_id', '=', 'members.id')
            ->join('teams', 'teams.id', '=', 'team_members.team_id')
            ->join('activities', 'activities.id', '=', 'teams.activity_id')
            ->select('members.firstname', 'members.lastname', 'activities.activity', 'teams.team_name')
            ->where('team_members.team_id', '=', 1)
            ->orderByDesc('members.firstname')
            ->get();
        dd(DB::getQueryLog());
        die();
        return $data;
    }
}

            // ->where('teams.id', '=', '/teams/2')
