<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Models\Category;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function adminIndex()
    {
        $organizations = Organization::with('category')->get();
        return view('organizations.manage', compact('organizations'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $categories = Category::all();
    return view('organizations.create', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'website' => 'nullable|url',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string',
        ]);

        // Create the organization with a 'pending' status
        Organization::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'website' => $request->website,
            'contact_email' => $request->contact_email,
            'contact_phone' => $request->contact_phone,
            'status' => 'pending',  // Default status is 'pending'
        ]);

        return redirect()->route('organizations.thankyou')->with('success', 'Your organization has been submitted for review.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $organization = Organization::findOrFail($id);
        return view('organizations.show', compact('organization'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        return view('organizations.edit', compact('organization'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $organization = Organization::findOrFail($id);
    if (auth()->user()->is_admin) { 
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        $organization->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.organizations.index')->with('success', 'Organization status updated.');
    }

    return redirect()->route('home')->with('error', 'You are not authorized to perform this action.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('organizations.index')->with('success', 'Organization deleted!');
    }


    public function accept($id)
    {
        $organization = Organization::findOrFail($id);
        $organization->status = 'approved';
        $organization->save();
        
        return redirect()->route('organizations.manage')->with('success', 'Organization approved.');
    }

    public function reject($id)
    {
        $organization = Organization::findOrFail($id);
        $organization->status = 'rejected';
        $organization->save();
        
        return redirect()->route('organizations.manage')->with('success', 'Organization approved.');
    }

}
