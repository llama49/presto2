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

        $announcements = Announcement::orderBy('created_at', 'desc')->where('is_accepted', true)->get();

        return view('announcements.index', compact('announcements'));
    }

    public function searchAnnouncements(Request $request){

        $announcements = Announcement::search($request->searched)->where("is_accepted", true)->get();

        return view('announcements.index', compact('announcements'));

    }

}
