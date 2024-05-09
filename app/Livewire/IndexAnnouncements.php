<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class IndexAnnouncements extends Component
{
    public function render()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->take(4)->get();
        return view('livewire.index-announcements', compact('announcements'));
    }
}
