<?php

namespace App\Http\Controllers;
use App\Models\Event;
Use App\Models\Organization;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{

    $events = Event::latest()->take(3)->get();
    $organizations = Organization::where('status', 'approved')->with('category')->latest()->take(6)->get();
    return view('home', compact('events', 'organizations'));
}

}
