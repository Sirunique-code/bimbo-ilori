<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EbookDownload;

class EbookController extends Controller
{
    public function request(Request $request)
    {
        // Split the full name into first and second names
        $parts = preg_split('/\s+/', trim($request->name), 2);

        $request->merge([
            'firstName'  => $parts[0] ?? '',
            'secondName' => $parts[1] ?? '',
        ]);

        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'secondName' => 'nullable|string|max:255',
            'email' => 'required|email|max:255|unique:ebook_downloads,email',
        ], [
            'email.unique' => 'This email has already downloaded the eBook.',
        ]);

        EbookDownload::create($validated);

        return redirect(url()->previous() . '#begin-purpose-journey')
            ->with('success', true);
    }

    public function download()
    {
        $path = storage_path('app/public/ebooks/The-art-of-asking-well.pdf');

        if (!file_exists($path)) {
            return redirect()
                ->back()
                ->with('error', 'Sorry, the eBook is currently unavailable.');
        }

        return response()->download(
            $path,
            'The Art of Asking Well.pdf'
        );
    }
}