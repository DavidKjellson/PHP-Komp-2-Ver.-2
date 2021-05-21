<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = DB::table('activities')->insert([
            ['activity' => 'Fotboll'],
            ['activity' => 'Skidor'],
            ['activity' => 'Gymnastik']
        ]);

        return $activities;
    }
}
