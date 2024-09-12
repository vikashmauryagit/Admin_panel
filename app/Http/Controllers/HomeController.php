<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $currentEvents = Event::whereDate('event_date', '<=', $today)->get();
        $upcomingEvents = Event::whereDate('event_date', '>', $today)->get();
        
          $notice=Notice::all();
          return view('Frontend.index',compact('currentEvents','upcomingEvents','notice'));

        // return view('showAllEvents.all_events');
    }
    public function about()
    {
        return view('About.about');
    }
    public function department()
    {
        return view('Department.depart');
    }
    public function service()
    {
        return view('Service.service');
    }
    public function doctor()
    {
        return view('Doctors.doctors');
    }
    public function newsEvent()
    {
        return view('NewsEvent.newsevent');
    }
    public function contact()
    {
        return view('Contact.contact');
    }

}
