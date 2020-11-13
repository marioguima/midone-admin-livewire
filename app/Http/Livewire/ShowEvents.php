<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowEvents extends Component
{
    public function render()
    {
        $events = Events::get();

        // return view('event.index', compact('events'));
        // ou assim
        return view('event.index', [
            'events' => $events
        ]);
    }
}
