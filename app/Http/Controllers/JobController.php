<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::online()->latest()->get();
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }
}
