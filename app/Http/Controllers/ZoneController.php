<?php

namespace App\Http\Controllers;
use App\Models\Zone;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZoneController extends Controller
{
     

    // public function index()
    // {
    //     $zones = Zone::all();
    //     return view('zones.index', compact('zones'));
    // }

   
    // public function create()
    // {
    //     $zoneNames = ['South Zone', 'North Zone', 'East Zone', 'West Zone'];
    //     return view('add_zone', compact('zoneNames'));
    // }

   
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'zone_name' => 'required|unique:zones,zone_name',
    //         'latitude' => 'required|numeric',
    //         'longitude' => 'required|numeric',
    //     ]);

    //     Zone::create($request->all());

    //     return redirect()->route('zones.index')->with('success', 'Zone added successfully.');
    // }


    // public function fetchCoordinates(Request $request)
    // {
    //     $zone = $request->zone;

    //     $response = Http::get('https://nominatim.openstreetmap.org/search', [
    //         'format' => 'json',
    //         'q' => $zone,
    //         'limit' => 1,
    //     ]);

    //     if ($response->successful() && count($response->json()) > 0) {
    //         $data = $response->json()[0];
    //         return response()->json([
    //             'latitude' => $data['lat'],
    //             'longitude' => $data['lon']
    //         ]);
    //     }
    //     return response()->json(['error' => 'Coordinates not found'], 404);
    // }

  
    // public function edit($id)
    // {
    //     $zone = Zone::findOrFail($id);
    //     return view('zones.edit', compact('zone'));
    // }

    
    // public function update(Request $request, $id)
    // {
    //     $zone = Zone::findOrFail($id);

    //     $request->validate([
    //         'zone_name' => 'required|unique:zones,zone_name,' . $id,
    //         'latitude' => 'required|numeric',
    //         'longitude' => 'required|numeric',
    //     ]);

    //     $zone->update($request->all());

    //     return redirect()->route('zones.index')->with('success', 'Zone updated successfully.');
    // }

    // Show zone list
    public function index()
    {
        $zones = Zone::all();
        $totalZones=Zone::count();
        return view('zone', compact('zones','totalZones'));
    }

    // Show Add Zone form with Bangalore zones
    public function create()
    {
        $zoneNames = [
            'Yelahanka',
            'Dasarahalli',
            'Rajarajeshwarinagar',
            'Mahadevapura',
            'Bommanahalli',
            'Bangalore East',
            'Bangalore West',
            'Bangalore South'
           
        ];

        return view('add_zone', compact('zoneNames'));
    }

    // Store new zone
    public function store(Request $request)
    {
        $request->validate([
            'zone_name' => 'required|unique:zones,zone_name',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Zone::create($request->all());

        return redirect()->route('zones.index')->with('success', 'Zone added successfully.');
    }

    // Show edit form with Bangalore zones
    public function edit($id)
    {
        $zone = Zone::findOrFail($id);

        $zoneNames = [
            'Yelahanka',
            'Dasarahalli',
            'Rajarajeshwarinagar',
            'Mahadevapura',
            'Bommanahalli',
            'Bangalore East',
            'Bangalore West',
            'Bangalore South'
        ];

        return view('edit_zone', compact('zone', 'zoneNames'));
    }

    // Update zone
    public function update(Request $request, $id)
    {
        $zone = Zone::findOrFail($id);

        $request->validate([
            'zone_name' => 'required|unique:zones,zone_name,' . $id,
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $zone->update($request->all());

        return redirect()->route('zones.index')->with('success', 'Zone updated successfully.');
    }

    
   
//     public function fetchCoordinates(Request $request)
// {
//     $zoneInput = $request->zone;

//     if (!$zoneInput) {
//         return response()->json(['error' => 'Zone is required'], 400);
//     }

//     $searchQuery = $zoneInput . ', Bangalore, India';

//     \Log::info('Nominatim search query: ' . $searchQuery);

//     $response = Http::get('https://nominatim.openstreetmap.org/search', [
//         'format' => 'json',
//         'q' => $searchQuery,
//         'limit' => 1,
//     ]);

//     if ($response->successful()) {
//         $data = $response->json();

//         if (count($data) > 0) {
//             return response()->json([
//                 'latitude' => $data[0]['lat'],
//                 'longitude' => $data[0]['lon']
//             ]);
//         }
//     }

//     return response()->json(['error' => 'Coordinates not found'], 404);
// }


public function fetchCoordinates(Request $request)
{
    $zoneQueryMap = [
        'Yelahanka' => 'Yelahanka, Bangalore',
        'Dasarahalli' => 'Dasarahalli, Bangalore',
        'Rajarajeshwarinagar' => 'Rajarajeshwarinagar, Bangalore',
        'Mahadevapura' => 'Mahadevapura, Bangalore',
        'Bommanahalli' => 'Bommanahalli, Bangalore',
        'Bangalore East' => 'Bengaluru East',
        'Bangalore West' => 'Bengaluru West',
        'Bangalore South' => 'Bengaluru South',
       
    ];

    $zoneInput = $request->input('zone');

    if (!$zoneInput) {
        return response()->json(['error' => 'Zone is required'], 400);
    }

    // Use mapped name or default with city appended
    $searchQuery = $zoneQueryMap[$zoneInput] ?? ($zoneInput . ', Bangalore, India');

    \Log::info("Fetching coordinates for: $searchQuery");

    try {
        $response = Http::withHeaders([
            'User-Agent' => 'YourAppName/1.0 (your-email@example.com)',
            'From' => 'your-email@example.com'
        ])->get('https://nominatim.openstreetmap.org/search', [
            'format' => 'json',
            'q' => $searchQuery,
            'limit' => 1,
        ]);

        if (!$response->successful()) {
            \Log::error("Nominatim API error: " . $response->status());
            return response()->json(['error' => 'Failed to get data from API'], 500);
        }

        $data = $response->json();

        if (count($data) === 0) {
            \Log::warning("No coordinates found for query: $searchQuery");
            return response()->json(['error' => 'Coordinates not found'], 404);
        }

        return response()->json([
            'latitude' => $data[0]['lat'],
            'longitude' => $data[0]['lon']
        ]);

    } catch (\Exception $e) {
        \Log::error("Exception while fetching coordinates: " . $e->getMessage());
        return response()->json(['error' => 'Server error fetching coordinates'], 500);
    }
}
}