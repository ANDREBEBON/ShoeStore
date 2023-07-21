<?php

namespace App\Http\Livewire;
use App\Models\perusahan;
use Livewire\Component;

class Home extends Component
{
    public function index()
    {
        $perusahans = perusahan::latest()->paginate(4);

        //render view with home
        return view('livewire.home', compact('perusahans'));
    }
}