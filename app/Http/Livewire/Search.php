<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{
    public String $query = '';
    public $jobs = [];
    public int $selectedIndex = 0;

    public function incrementIndex(){
        if ($this->selectedIndex === count($this->jobs) - 1){
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex++;
    }

    public function decrementIndex(){

        if ($this->selectedIndex === 0){
            $this->selectedIndex = count($this->jobs) - 1;
            return;
        }
        $this->selectedIndex--;
    }

    public function updatedQuery()
    {
        $words = '%' . $this->query . '%';
        if (strlen($this->query) > 2)
        {
            $this->jobs = Job::where('title', 'like', $words)
            ->orWhere('description', 'like', $words)
            ->get();
        }
    }

    public function resetIndex()
    {
        $this->reset('selectedIndex');
    }

    public function showJob()
    {
        if($this->jobs->isNotEmpty()){
            return redirect()->route('jobs.show', [$this->jobs[$this->selectedIndex]['id']]);
        }
    }

    public function render()
    {
        return view('livewire.search');
    }
}
