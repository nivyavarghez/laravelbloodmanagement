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
        try {
            // Create a new Donor instance and save it to the database
            $donor = BloodDonor::create([
                'name' => $request->name,
                'email' => $request->email,
                'blood_group' => $request->blood_group,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
            ]);
    
            // Redirect to a specific route after successful registration
            return redirect()->route('thank-you')->with('success', 'Thank you for registering as a donor!');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error registering donor: ' . $e->getMessage());
            
            // Redirect back with an error message
            return redirect()->back()->with('error', 'An error occurred while registering. Please try again.');
        }
    }

    // Donor Listing
    public function index()
    {
        // Fetch donor data from database
        $donors = BloodDonor::all();

        return view('donor.listing', compact('donors'));
    }
}
