<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EbookDownload;

class EbookController extends Controller
{
    public function request(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name'  => 'nullable|string|max:255',
        ]);

        // Check if email already exists
        if (EbookDownload::where('email', $request->email)->exists()) {
            return back()->with('error', 'You have already downloaded this eBook.');
        }

        // Save record
        EbookDownload::create([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        // Instead of sending file directly, we flag success and let JS trigger download
        return back()->with('success', true);
    }

    // File download route
    public function download()
    {
        $path = storage_path('app/public/ebooks/The-art-of-asking-well.pdf'); // put file in storage/app/public/ebooks/
        return response()->download($path, 'The Art of Asking Well.pdf');
    }
}
