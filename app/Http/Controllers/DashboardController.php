<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodBank;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Sample data for demonstration
        $totalBloodBanks = BloodBank::count();
        $totalUsers = User::count();
        $pendingRegistrations = BloodBank::where('status', 'pending')->count();

        return view('admin.admin_dashboard', compact('totalBloodBanks', 'totalUsers', 'pendingRegistrations'));
    }

    public function bloodreg()
    {
        return view('admin.bloodbankadd');
    }

    public function bloodbankindex(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'ownership' => 'required',
            'licence_number' => 'required',
            'licence_address' => 'required',
            'validity' => 'required|date',
            'telephone_number' => 'required',
            'email' => 'required|email',
            'status' => 'required',
            'medical_officer' => 'required',
        ]);
    
        // Create a new BloodBank instance and save it to the database
        $bloodBank = BloodBank::create($request->all());
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Blood Bank registered successfully!');
    }
}
