<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EbookDownload;

class EbookController extends Controller
{
    public function request(Request $request)
    {
        // Validate all required fields
        $request->validate([
            'firstName' => 'required|string|max:255',
            'secondName'  => 'required|string|max:255',
            'email'      => 'required|email|unique:ebook_downloads,email',
        ], [
            'firstName.required' => 'First name is required.',
            'secondName.required'  => 'Second name is required.',
            'email.required'      => 'Email is required.',
            'email.email'         => 'Please enter a valid email address.',
            'email.unique'        => 'This email has already been used to download the eBook.',
        ]);

        // Save record
        EbookDownload::create([
            'firstName' => $request->firstName,
            'secondName'  => $request->secondName,
            'email'      => $request->email,
        ]);

        // Trigger success feedback (auto download handled by JS)
        return back()->with('success', true);
    }

    // File download route
    public function download()
    {
        $path = storage_path('app/public/ebooks/The-art-of-asking-well.pdf');

        if (!file_exists($path)) {
            return back()->with('error', 'Sorry, the eBook file is missing. Please try again later.');
        }

        return response()->download($path, 'The Art of Asking Well.pdf');
    }
}
