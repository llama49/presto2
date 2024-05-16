<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class ShowAnnouncements extends Component
{
    public $announcement;



    public function render()
    {

        return view('livewire.show-announcements');
    }
}
