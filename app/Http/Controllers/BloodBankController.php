<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    use App\Models\BloodBank;
use Illuminate\Http\Request;

public function bloodbankindex(Request $request){
    // Validate the incoming request data
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'ownership' => 'required',
        'licence_number' => 'required',
        'licence_address' => 'required',
        'validity' => 'required',
        'telephone_number' => 'required',
        'email' => 'required|email',
        'status' => 'required',
        'medical_officer' => 'required',
    ]);

    // Create a new BloodBank instance and save it to the database
    $bloodBank = BloodBank::create([
        'name' => $request->name,
        'address' => $request->address,
        'ownership' => $request->ownership,
        'licence_number' => $request->licence_number,
        'licence_address' => $request->licence_address,
        'validity' => $request->validity,
        'telephone_number' => $request->telephone_number,
        'email' => $request->email,
        'status' => $request->status,
        'medical_officer' => $request->medical_officer,
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Blood Bank registered successfully!');
}


    public function index()
    {
        // Fetch blood bank data from database
        $bloodBanks = BloodBank::all();

        return view('bloodbank.index', compact('bloodBanks'));
    }
}
