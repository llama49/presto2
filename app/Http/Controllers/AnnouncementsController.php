<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    //
    public function createAnnouncements(){
        return view('announcements.create');
    }
}
