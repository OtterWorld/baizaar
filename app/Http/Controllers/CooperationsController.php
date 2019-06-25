<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class CooperationsController extends Controller
{
    public function index(Job $job) {

        $jobs = $job
            ->get();
        
        return view('cooperations.index', compact('jobs'));
    }
}
