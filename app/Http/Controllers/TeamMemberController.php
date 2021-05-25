<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $data = DB::table('members')
            ->join('teams', 'teams.id', '=', 'members.team_id')
            ->select('members.*')
            ->get();
        return $data;
    }
}
