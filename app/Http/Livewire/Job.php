<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Job extends Component
{
    public $job;

    public function addLike()
    {
        if(auth()->check()){
            auth()->user()->likes()->toggle($this->job->id);
        }else{
            // send flash message event
            $this->emit('flash', 'Please connect to be able to like this job and bookmark it!', 'error');
        }
    }

    public function render()
    {
        return view('livewire.job');
    }
}
