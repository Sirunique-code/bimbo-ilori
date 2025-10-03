<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email',
            'phone_number' => 'required|string|max:20',
        ]);

        Lead::create($validated);

        return redirect()->route('thank-you'); // will show thank you page
    }
}
