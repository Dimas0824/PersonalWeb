<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PersonalInfo;
use App\Models\Service;

class PortfolioHome extends Component
{
    public $personalInfo;
    public $services;

    public function mount()
    {
        $this->personalInfo = PersonalInfo::first();
        $this->services = Service::orderBy('order')->get();
    }

    public function render()
    {
        return view('livewire.portfolio-home')->layout('layouts.app');
    }
}
