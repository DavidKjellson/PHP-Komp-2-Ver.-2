<?php

namespace App\Http\Controllers;

use App\Models\Team;
use \Illuminate\Support\Facades\DB;


class TeamController extends Controller
{
    public function teams($id)
    {
        // $team = Team::all();
        // $members = Member::all();
        // return view('teams', [
        //     'teams' => $team,
        //     'members' => $members
        // ]);
        $team = Team::find($id);
        // $members = Member::find($id);

        // DB::enableQueryLog();
        $members = DB::table('members')
            ->join('team_members', 'team_members.member_id', '=', 'members.id')
            ->join('teams', 'teams.id', '=', 'team_members.team_id')
            ->join('activities', 'activities.id', '=', 'teams.activity_id')
            ->select('members.firstname', 'members.lastname', 'activities.activity', 'teams.team_name')
            ->where('team_members.team_id', '=', $id)
            ->orderByDesc('members.firstname')
            ->get();
        // dd(DB::getQueryLog());

        // select * from members
        // join team_members on team_members.member_id = members.id
        // join teams on teams.id = team_members.team_id
        // where teams.id = $id


        return view('teams', ['team' => $team, 'members' => $members]);
    }
}
