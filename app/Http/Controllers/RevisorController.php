<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $announcements = Announcement::where('is_accepted', null)->get()->toArray();

        $announcements_checked = Announcement::where('is_accepted', true)->get()->toArray();

        $announcements_refused = Announcement::where('is_accepted', false)->get()->toArray();

        return view('revisor.index', compact('announcements', 'announcements_checked', 'announcements_refused'));

    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);

        return redirect()->back()->with('message', 'Hai accettato l\'annuncio');

    }

    public function refusesAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);

        return redirect()->back()->with('error', 'Hai rifiutato l\'annuncio');

    }

    public function undoAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(null);

        return redirect()->back()->with('message', 'Hai ripristinato la revisione');

    }

    public function becomeRevisor(Request $request){

        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $request->body));
        return redirect('/')->with('message', 'Hai richiesto di diventare revisore correttamente');
    }

    public function makeRevisor(User $user){

        Artisan::call('app:make-user-revisor', ['email' =>$user->email]);
        return redirect('/')->with('message', "L'utente è diventato revisore");

    }

    public function workWithUs(){
        return view('revisor.work');
    }
}
