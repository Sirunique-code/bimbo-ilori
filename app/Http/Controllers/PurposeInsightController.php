<?php

namespace App\Http\Controllers;

use App\Models\PurposeInsight;
use Illuminate\Http\Request;

class PurposeInsightController extends Controller
{
    /**
     * Public Purpose Insight index page
     */
    public function index()
    {
        $publishedInsights = PurposeInsight::where('is_published', true)
            ->latest('published_at')
            ->get()
            ->groupBy('category');

        $latestInsights = PurposeInsight::where('is_published', true)
            ->latest('published_at')
            ->take(6)
            ->get();

        return view('guests.purpose-insight', compact('publishedInsights', 'latestInsights'));
    }

    /**
     * Public Purpose Insight single article view page
     */
    public function show($slug)
    {
        $insight = PurposeInsight::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $relatedInsights = PurposeInsight::where('is_published', true)
            ->where('id', '!=', $insight->id)
            ->where('category', $insight->category)
            ->take(3)
            ->get();

        if ($relatedInsights->isEmpty()) {
            $relatedInsights = PurposeInsight::where('is_published', true)
                ->where('id', '!=', $insight->id)
                ->latest()
                ->take(3)
                ->get();
        }

        return view('guests.purpose-insight-show', compact('insight', 'relatedInsights'));
    }
}
