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
    public function index()
    {
        $organizations = Organization::paginate(10);
        return view('organizations.index', compact('organizations'));
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'website' => 'nullable|url',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string|max:20',
        ]);
    
        $validated['user_id'] = auth()->id();
        $validated['status'] = 'pending';
    
        Organization::create($validated);
    
        return redirect()->route('home')->with('success', 'Your request has been submitted and is waiting for admin approval.');
    }

    /**
     * Display the specified resource.
     */
    public function show($organization)
    {
        $organization = Organization::findOrFail($organization);
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
    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $organization->update($request->all());

        return redirect()->route('organizations.index')->with('success', 'Organization updated!');
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
        
        return redirect()->route('organizations.index')->with('success', 'Organization approved.');
    }

    public function reject($id)
    {
        $organization = Organization::findOrFail($id);
        $organization->status = 'rejected';
        $organization->save();
        
        return redirect()->route('organizations.index')->with('success', 'Organization rejected.');
    }

}
