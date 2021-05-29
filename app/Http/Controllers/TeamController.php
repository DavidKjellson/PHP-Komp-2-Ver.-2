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
        $members = Member::with('team')->where('id', '=', $id);
        return view('teams', ['team' => $team])->with('members', $members);
    }
}
