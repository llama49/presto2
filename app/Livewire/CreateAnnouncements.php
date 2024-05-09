<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcements;
use Livewire\Attributes\Validate;

class CreateAnnouncements extends Component
{   
    #[Validate('required', message: 'Il campo è obligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 3 caratteri.')]
    public $title;

    #[Validate('required', message: 'Il campo è obligatorio.')]
    public $body;

    #[Validate('required', message: 'Il campo è obligatorio.')]
    public $price;

    public function store(){
        Announcements::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price
        ]);

        /* messaggio di errore direttamente con livewire */
        session()->flash('message', 'Articolo creato');

        $this->reset();
        // serve per svuotare i campi
    }

    public function render()
    {
        return view('livewire.create-announcements');
    }
}
