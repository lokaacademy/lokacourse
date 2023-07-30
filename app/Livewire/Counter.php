<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $title_site = "Loka Academy Indonesia - Belajar Online";
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function mount()
    {
        $this->title_site;
    }

    public function render()
    {
        return view('livewire.home')
        ->layout('layouts.app')
        ->slot('main');
    }
}
