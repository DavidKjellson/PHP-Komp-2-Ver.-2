<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Member;

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
        $members = Member::all();

        // select * from members
        // join team_members on team_members.member_id = members.id
        // join teams on teams.id = team_members.team_id
        // where teams.id = $id


        return view('teams', ['team' => $team, 'members' => $members]);
    }
}
