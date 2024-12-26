<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('admin.master.location.index', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_active' => 'required|boolean',
        ]);
        
        Location::create([
            'type' => $request->type,
            'name' => $request->name,
            'address' => $request->address,
            'start_date' => $request->start_date ?? null,
            'end_date' => $request->end_date ?? null,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.location')->with('success', 'Location added successfully!');
    }
}
