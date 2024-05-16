<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use App\Models\Announcements;
use App\Models\Category;
use App\Models\Image;
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

    #[Validate(['images.*' => 'image|max:1024'])]
    public $images = [];

    #[Validate(['temporary_images.*' => 'image|max:1024'])]
    public $temporary_images;

    public $announcement;


    use WithFileUploads;

    public function updatedTemporaryImages()
    {
        foreach ($this->temporary_images as $image) {

            $this->images[] = $image;

        }
    }
    public function store(){

        $this->validate();


        $announcement = Announcement::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
            'user_id' => Auth::user()->id,
            'category_id' => $this->category,
        ]);



        if(count($this->images)){
            foreach ($this->images as $image) {
                $announcement->images()->create(['path' => $image->store('images', 'public')]);
            }
        }

        $announcement->save();

        /* messaggio di errore direttamente con livewire */
        session()->flash('message', 'Articolo creato');

        $this->reset();
        // serve per svuotare i campi
    }

    public function removeImage($key){

        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function render()
    {

        $categories = Category::all();
        return view('livewire.create-announcements', compact('categories'));
    }
}

/*
    public $img;
    */

/* if($this->img){
            $imgPath = 'public/img/default-image.jpg';

            $imgPath = $this->img->store('public/img');
        } */



        /* 'img' => $imgPath, */