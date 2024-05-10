<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use App\Models\Announcements;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateAnnouncements extends Component
{
    #[Validate('required', message: 'Il campo è obligatorio.')]
    #[Validate('min:5', message: 'Il titolo deve avere almeno 3 caratteri.')]
    public $title;

    #[Validate('required', message: 'Il campo è obligatorio.')]
    public $body;

    #[Validate('required', message: 'Il campo è obligatorio.')]
    public $price;

    #[Validate('required', message: 'Il campo è obligatorio.')]
    public $category;

    public $img;

    use WithFileUploads;

    public function store(){

         $this->validate();

         $imgPath = 'public/img/default-image.jpg';

        if($this->img){

            $imgPath = $this->img->store('public/img');
        }

        Announcement::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
            'user_id' => Auth::user()->id,
            'category_id' => $this->category,
            'img' => $imgPath,
        ]);

        /* messaggio di errore direttamente con livewire */
        session()->flash('message', 'Articolo creato');

        $this->reset();
        // serve per svuotare i campi
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-announcements', compact('categories'));
    }
}
