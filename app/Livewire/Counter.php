<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $title_site = "Loka Academy Indonesia - Belajar Online";
    public $concepts;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function getConcepts()
    {
        $concepts = json_decode(file_get_contents(storage_path() . "/app/public/concept.json"));
        $this->concepts = $concepts->concepts;
    }

    public function mount()
    {
        $this->getConcepts();
    }


    public function render()
    {
        return view('livewire.home')
        ->layout('layouts.app')
        ->slot('main');
    }
}
