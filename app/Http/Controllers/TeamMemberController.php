<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $data = DB::table('members')
            ->join('team_members', 'team_members.member_id', '=', 'members.id')
            ->join('teams', 'teams.id', '=', 'team_members.team_id')
            ->join('activities', 'activities.id', '=', 'teams.activity_id')
            ->select('members.firstname', 'members.lastname', 'activities.activity', 'teams.team_name')
            ->orderByDesc('members.firstname')
            ->get();
        return $data;
    }
}
