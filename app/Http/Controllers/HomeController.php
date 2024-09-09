<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
          return view('Frontend.index');
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
