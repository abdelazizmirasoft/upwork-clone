<?php

namespace App\Http\Controllers;

use App\Models\CoverLetter;
use App\Models\Job;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function store(Request $request, Job $job)
    {
        $proposal = Proposal::create([
            'job_id' => $job->id
        ]);

        CoverLetter::create([
            'proposal_id' => $proposal->id,
            'content' => $request->input('content')
        ]);

        return redirect()->route('jobs');
    }
}
