<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    //
    public function createAnnouncements(){

        return view('announcements.create');
    }

    public function showAnnouncements(Announcement $announcement){

        return view('announcements.show', compact('announcement'));
    }


    public function indexAnnouncements(){

        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('announcements.index', compact('announcements'));
    }


}
