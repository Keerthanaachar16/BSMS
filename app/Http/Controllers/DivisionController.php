<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::all();
        $totalDivisions=Division::count();
        return view('division', compact('divisions','totalDivisions'));
    }

    public function create()
    {
        return view('add_division');
    }

    public function store(Request $request)
    {
        $request->validate([
            'zone_name' => 'required',
            'div_name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        Division::create($request->all());

        return redirect()->route('divisions.index')->with('success', 'Division added successfully.');
    }

    // public function edit(Division $division)
    // {
    //     return view('division.edit_division', compact('division'));
    // }

    // public function update(Request $request, Division $division)
    // {
    //     $request->validate([
    //         'zone_name' => 'required',
    //         'div_name' => 'required',
    //         'latitude' => 'required',
    //         'longitude' => 'required'
    //     ]);

    //     $division->update($request->all());

    //     return redirect()->route('divisions.index')->with('success', 'Division updated successfully.');
    // }
    
    // public function edit($id)
    // {
    //     $division = Division::findOrFail($id);
    //     return view('edit_division', compact('division'));
    // }
    // public function update(Request $request, $id)
    // {
    //     $division = Division::findOrFail($id);

    //     $division->zone_name = $request->zone_name;
    //     $division->div_name = $request->div_name;
    //     $division->latitude = $request->latitude;
    //     $division->longitude = $request->longitude;

    //      $request->validate([
    //         'div_name' => 'required|unique:divisions,div_name,' . $id,
    //         'zone_name' => 'required|unique:divisions,zone_name,',
    //         'latitude' => 'required|numeric',
    //         'longitude' => 'required|numeric',
    //     ]);
    //     $division->update($request->all());

    //     return redirect()->route('divisions.index')->with('success', 'Division updated successfully.');

    //     $division->save();

    //     return redirect()->route('divisions.index')
    //                     ->with('success', 'Division updated successfully');
    // }

    public function edit($id)
    {
        $division = Division::findOrFail($id);

        return view('edit_division', compact('division'));
    }

     // Update division
    public function update(Request $request, $id)
    {
        $request->validate([
            'div_name'   => 'required|string|max:255',
            'zone_name'  => 'required|string|max:255',
            'latitude'   => 'required|numeric',
            'longitude'  => 'required|numeric',
        ]);

        $division = Division::findOrFail($id);

        // Update with new values
        $division->div_name = $request->div_name;
        $division->zone_name = $request->zone_name;
        $division->latitude = $request->latitude;
        $division->longitude = $request->longitude;

        $division->save();

        // Redirect to index with success message
        return redirect()->route('divisions.index')->with('success', 'Division updated successfully!');
    }
}

    



