<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodDonor; // Import the Donor model

class DonorController extends Controller
{

    public function showRegister(){
        return view('donor.donorreg');
    }
    // Donor Registration
    public function register(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'blood_group' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            // Add other validation rules as needed
        ]);

        // Create a new Donor instance and save it to the database
        $donor = BloodDonor::create([
            'name' => $request->name,
            'email' => $request->email,
            'blood_group' => $request->blood_group,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Donor registered successfully!');
    }

    // Donor Listing
    public function index()
    {
        // Fetch donor data from database
        $donors = BloodDonor::all();

        return view('donor.listing', compact('donors'));
    }
}
