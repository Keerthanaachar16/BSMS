<?php

namespace App\Http\Controllers;
use App\Models\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{

    public function index()
    {
        $wards = Ward::all();
        $totalWards=Ward::count();
        return view('ward', compact('wards','totalWards'));
    }
    //  private $divisions = [
    //     "Bangalore East" => [
    //         ["no" => 1, "name" => "Hudi"],
    //         ["no" => 2, "name" => "Krishnarajapuram"],
    //         ["no" => 3, "name" => "C.V. Raman Nagar"],
    //     ],
    //     "Bangalore West" => [
    //         ["no" => 4, "name" => "Rajajinagar"],
    //         ["no" => 5, "name" => "Vijayanagar"],
    //         ["no" => 6, "name" => "Malleswaram"],
    //     ],
    //     "South" => [
    //         ["no" => 7, "name" => "Basavanagudi"],
    //         ["no" => 8, "name" => "Jayanagar"],
    //         ["no" => 9, "name" => "Banashankari"],
    //     ],
    //     "Yelahanka" => [
    //         ["no" => 10, "name" => "Yelahanka"],
    //         ["no" => 11, "name" => "Byatarayanapura"],
    //         ["no" => 12, "name" => "Kodigehalli"],
    //     ],
    //     "Bommanahalli" => [
    //         ["no" => 13, "name" => "BTM Layout"],
    //         ["no" => 14, "name" => "HSR Layout"],
    //         ["no" => 15, "name" => "Bommanahalli"],
    //     ],
    //     "Rajarajeshwari Nagar" => [
    //         ["no" => 16, "name" => "Kengeri"],
    //         ["no" => 17, "name" => "Ullal"],
    //         ["no" => 18, "name" => "Rajarajeshwari Nagar"],
    //     ],
    //     "Dasarahalli" => [
    //         ["no" => 19, "name" => "Peenya"],
    //         ["no" => 20, "name" => "Jalahalli"],
    //         ["no" => 21, "name" => "Dasarahalli"],
    //     ],
    //     "Mahadevapura" => [
    //         ["no" => 22, "name" => "Whitefield"],
    //         ["no" => 23, "name" => "Marathahalli"],
    //         ["no" => 24, "name" => "Mahadevapura"],
    //     ],
    // ];


    private $divisions = [
    "Yelahanka" => [
        ["no" =>1, "name" => "Kempegowda Ward"],
        ["no" => 2, "name" => "Jakkur"],
        ["no" => 3, "name" => "Atturu"],
    ],
    "Byatarayanapura" => [
        ["no" => 6, "name" => "Kodigehalli"],
        ["no" => 7, "name" => "Dodda Bommasandra"],
        ["no" => 8, "name" => "Vidyaranyapura"],
    ],
    "Yeshwanthapura" => [
        ["no" => 27, "name" => "HMT Layout"],
        ["no" => 28, "name" => "Gokula"],
        ["no" => 29, "name" => "Subramanyanagara"],
    ],

    "Hebbal" => [
        ["no" => 66, "name" => "Radhakrishna Temple"],
        ["no" => 67, "name" => "Sanjaya Nagar"],
        ["no" => 68, "name" => "Vishwanath Nagenahalli"],
    ],
    "Pulakesi Nagar" => [
        ["no" => 74, "name" => "Kaval Bairasandra"],
        ["no" => 75, "name" => "Kushal Nagar"],
        ["no" => 76, "name" => "Muneshwara Nagar"],
    ],
    "Sarvagnanagar" => [
        ["no" => 94, "name" => "HBR Layout"],
        ["no" => 95, "name" => "Nagavara"],
        ["no" => 96, "name" => "Kadugondanahalli"],
    ],

    "Gandhinagar" => [
        ["no" => 110, "name" => "Subhash Nagar"],
        ["no" => 111, "name" => "Okalipuram"],
        ["no" => 112, "name" => "Sheshadripuram"],
    ],
    "Chamarajpet" => [
        ["no" => 136, "name" => "Azad Nagar"],
        ["no" => 137, "name" => "Sunkenahalli"],
        ["no" => 138, "name" => "Hanumanthanagar"],
    ],
    "Rajajinagar" => [
        ["no" => 139, "name" => "Rajajinagar"],
        ["no" => 140, "name" => "Basaveshwara Nagar"],
        ["no" => 141, "name" => "Kamakshipalya"],
    ],

    "Basavanagudi" => [
        ["no" => 168, "name" => "Sunkenahalli"],
        ["no" => 169, "name" => "Vishveshwara Puram"],
        ["no" => 170, "name" => "Srinagar"],
    ],
    "Jayanagar" => [
        ["no" => 172, "name" => "Yediyur"],
        ["no" => 173, "name" => "Pattabhirama Nagar"],
        ["no" => 174, "name" => "Byrasandra"],
    ],
    "Padmanabhanagar" => [
        ["no" => 197, "name" => "Banashankari Temple Ward"],
        ["no" => 198, "name" => "Hosakerehalli"],
        ["no" => 199, "name" => "Ganesh Mandir Ward"],
    ],

    "Bommanahalli" => [
        ["no" => 175, "name" => "Hongasandra"],
        ["no" => 176, "name" => "Mangammanapalya"],
        ["no" => 177, "name" => "Bommanahalli"],
    ],
    "BTM Layout" => [
        ["no" => 178, "name" => "Madiwala"],
        ["no" => 179, "name" => "Jakkasandra"],
        ["no" => 180, "name" => "Ejipura"],
    ],
    "HSR Layout" => [
        ["no" => 181, "name" => "HSR Layout"],
        ["no" => 182, "name" => "Agara"],
        ["no" => 183, "name" => "Koramangala"],
    ],

    "Rajarajeshwari Nagar" => [
        ["no" => 160, "name" => "Rajarajeshwari Nagar"],
        ["no" => 161, "name" => "Hosakerehalli"],
        ["no" => 162, "name" => "Gnanabharathi"],
    ],
    "Kengeri" => [
        ["no" => 159, "name" => "Kengeri"],
        ["no" => 158, "name" => "Herohalli"],
        ["no" => 157, "name" => "Laggere"],
    ],
    "Nagarbhavi" => [
        ["no" => 163, "name" => "Nagarbhavi"],
        ["no" => 164, "name" => "Ullalu"],
        ["no" => 165, "name" => "Bapuji Nagar"],
    ],

    "Dasarahalli" => [
        ["no" => 14, "name" => "T. Dasarahalli"],
        ["no" => 15, "name" => "Bagalakunte"],
        ["no" => 16, "name" => "Shettihalli"],
    ],
    "Peenya" => [
        ["no" => 17, "name" => "Peenya Industrial Area"],
        ["no" => 18, "name" => "Lakshmidevi Nagar"],
        ["no" => 19, "name" => "Nandini Layout"],
    ],
    "Jalahalli" => [
        ["no" => 20, "name" => "Jalahalli"],
        ["no" => 21, "name" => "Jalahalli West"],
        ["no" => 22, "name" => "Jalahalli East"],
    ],

    "KR Puram" => [
        ["no" => 81, "name" => "KR Puram"],
        ["no" => 82, "name" => "Ramamurthy Nagar"],
        ["no" => 83, "name" => "Vijnanapura"],
    ],
    "Mahadevapura" => [
        ["no" => 84, "name" => "Garudachar Palya"],
        ["no" => 85, "name" => "Doddanekkundi"],
        ["no" => 86, "name" => "Marathahalli"],
    ],
    "Whitefield" => [
        ["no" => 87, "name" => "Hagadur"],
        ["no" => 88, "name" => "Doddanekkundi Extension"],
        ["no" => 89, "name" => "Whitefield"],
    ],
];

    public function create()
    {
        $divisions = array_keys($this->divisions);
        return view('add_ward', compact('divisions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'division_name' => 'required',
            'ward_name' => 'required',
            'ward_no' => 'required'
        ]);

        Ward::create([
            'division_name' => $request->division_name,
            'ward_name' => $request->ward_name,
            'ward_no' => $request->ward_no,
        ]);

        return redirect()->route('wards.index')->with('success', 'Ward Added Successfully!');
    }

    // public function edit(Ward $id)
    // {
       

    //      $ward = Ward::findOrFail($id);

    //     return view('edit_ward', compact('ward'));
    // }

    // public function update(Request $request, Ward $id)
    // {
    //     $request->validate([
    //         'division_name' => 'required',
    //         'ward_name' => 'required',
    //         'ward_no' => 'required'
    //     ]);
    //      $division = Ward::findOrFail($id);

    //     $ward->update([
    //         'division_name' => $request->division_name,
    //         'ward_name' => $request->ward_name,
    //         'ward_no' => $request->ward_no,
    //     ]);

    //     return redirect()->route('wards.index')->with('success', 'Ward Updated Successfully!');
    // }

     public function edit($id)
    {
        $ward = Ward::findOrFail($id);

        return view('edit_ward', compact('ward'));
    }

     // Update division
    public function update(Request $request, $id)
    {
        $request->validate([
            'division_name' => 'required',
            'ward_name' => 'required',
            'ward_no' => 'required',
        ]);

        $ward = Ward::findOrFail($id);

        // Update with new values
        $ward->division_name = $request->division_name;
        $ward->ward_name = $request->ward_name;
        $ward->ward_no = $request->ward_no;
        $ward->save();

        // Redirect to index with success message
        return redirect()->route('wards.index')->with('success', 'Ward updated successfully!');
    }

    public function getWards($division)
    {
        return response()->json($this->divisions[$division] ?? []);
    }
}
