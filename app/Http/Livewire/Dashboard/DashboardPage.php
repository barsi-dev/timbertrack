<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class DashboardPage extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard-page')
            ->extends('layouts.app')
            ->section('body');;
    }
}