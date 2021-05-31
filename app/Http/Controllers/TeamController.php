<?php

namespace App\Http\Controllers;

use App\Models\Team;
use \Illuminate\Support\Facades\DB;


class TeamController extends Controller
{
    public function teams($id)
    {
        $team = Team::find($id);
        $members = DB::table('members')
            ->join('team_members', 'team_members.member_id', '=', 'members.id')
            ->join('teams', 'teams.id', '=', 'team_members.team_id')
            ->join('activities', 'activities.id', '=', 'teams.activity_id')
            ->select('members.firstname', 'members.lastname', 'members.birthday', 'members.email', 'members.member_fee', 'activities.activity', 'teams.team_name')
            ->where('team_members.team_id', '=', $id)
            ->orderByDesc('members.firstname')
            ->get();

        return view('teams', ['team' => $team, 'members' => $members]);
    }
}
