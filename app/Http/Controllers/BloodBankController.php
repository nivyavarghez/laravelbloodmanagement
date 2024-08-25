<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodBank;

class BloodBankController extends Controller
{

public function showRegister(){
    return view('bloodbank.bloodbankreg');
}
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



public function getindex()
{
    $bloodBanks = BloodBank::all();
    return view('admin.bloodbanks', compact('bloodBanks'));
}

}
