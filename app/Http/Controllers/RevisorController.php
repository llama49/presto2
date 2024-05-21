<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $announcements = Announcement::where('is_accepted', null)->get();

        $announcements_checked = Announcement::where('is_accepted', true)->get()->toArray();

        $announcements_refused = Announcement::where('is_accepted', false)->get()->toArray();

        $announcements_prova = Announcement::where('is_accepted', null)->get();





        return view('revisor.index', compact('announcements', 'announcements_checked', 'announcements_refused', 'announcements_prova'));

    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);

        return redirect()->back()->with('message', __('ui.acceptedAnnouncement'));

    }

    public function refusesAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);

        return redirect()->back()->with('error', __('ui.rejectedAnnouncement'));

    }

    public function undoAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(null);

        return redirect()->back()->with('message', __('ui.restore'));

    }

    public function becomeRevisor(Request $request){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $request->body));
        Auth::user()->is_revisor = NULL;
        Auth::user()->save();
        return redirect('/')->with('message', __('ui.revisor3'));

    }

    public function makeRevisor(User $user){

        Artisan::call('app:make-user-revisor', ['email' =>$user->email]);
        return redirect('/')->with('message', __("ui.revisor4"));

    }

    public function workWithUs(){
        return view('revisor.work');
    }
}
