<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;
// use App\Models\Event;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
        'event_id' => 'required|exists:events,id',
        'amount' => 'required|numeric|min:1',
        'currency' => 'required|in:MAD,USD',
    ]);

    Donation::create($request->all());

    return back()->with('success', 'Donation submitted. Thank you!');
}

}

