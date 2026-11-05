<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\PurposeInsight;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created comment/question/feedback for a Purpose Insight article.
     */
    public function store(Request $request, $slug)
    {
        $insight = PurposeInsight::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        // Honeypot spam protection: if website_hp is filled, reject quietly
        if (!empty($request->input('website_hp'))) {
            return redirect()->to(route('purpose-insight.show', $insight->slug) . '#comments-section')
                ->with('comment_success', 'Thank you! Your comment has been received.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'type' => 'nullable|string|in:comment,question,feedback',
            'comment' => 'required|string|min:3|max:3000',
        ], [
            'name.required' => 'Please provide your name.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'comment.required' => 'Please type your comment, question, or reflection.',
            'comment.min' => 'Your comment must be at least 3 characters long.',
            'comment.max' => 'Your comment cannot exceed 3000 characters.',
        ]);

        $comment = $insight->comments()->create([
            'name' => strip_tags(trim($validated['name'])),
            'email' => strip_tags(trim($validated['email'])),
            'type' => $validated['type'] ?? 'comment',
            'comment' => strip_tags(trim($validated['comment'])),
            'is_approved' => true,
            'ip_address' => $request->ip(),
        ]);

        return redirect()->to(route('purpose-insight.show', $insight->slug) . '#comment-' . $comment->id)
            ->with('comment_success', 'Thank you! Your ' . ($validated['type'] ?? 'comment') . ' has been posted successfully.');
    }
}
