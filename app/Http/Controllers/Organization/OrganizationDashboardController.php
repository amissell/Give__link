<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Models\Event;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrganizationDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $organization = Auth::user()->organization;
        // $events = Event::where('organization_id', $organization->id)->withCount('volunteers')->get();
        return view('organizations.dashboard');
    }

}
