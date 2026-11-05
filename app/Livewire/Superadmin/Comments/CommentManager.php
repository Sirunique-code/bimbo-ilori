<?php

namespace App\Livewire\Superadmin\Comments;

use App\Models\Comment;
use App\Models\PurposeInsight;
use Livewire\Component;
use Livewire\WithPagination;

class CommentManager extends Component
{
    use WithPagination;

    public $search = '';
    public $filterInsightId = '';
    public $filterType = '';
    public $filterStatus = '';

    // Reply state
    public $replyingCommentId = null;
    public $replyText = '';

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingFilterInsightId()
    {
        $this->resetPage();
    }

    public function updatingFilterType()
    {
        $this->resetPage();
    }

    public function updatingFilterStatus()
    {
        $this->resetPage();
    }

    public function toggleStatus($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->is_approved = !$comment->is_approved;
        $comment->save();

        session()->flash('message', 'Comment status updated successfully.');
    }

    public function startReply($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $this->replyingCommentId = $commentId;
        $this->replyText = $comment->admin_reply ?? '';
    }

    public function cancelReply()
    {
        $this->replyingCommentId = null;
        $this->replyText = '';
    }

    public function saveReply()
    {
        $this->validate([
            'replyText' => 'required|string|max:3000',
        ]);

        $comment = Comment::findOrFail($this->replyingCommentId);
        $comment->admin_reply = trim($this->replyText);
        $comment->admin_replied_at = now();
        $comment->save();

        $this->cancelReply();
        session()->flash('message', 'Author reply saved and published.');
    }

    public function deleteReply($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->admin_reply = null;
        $comment->admin_replied_at = null;
        $comment->save();

        session()->flash('message', 'Author reply removed.');
    }

    public function delete($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->delete();

        session()->flash('message', 'Comment deleted successfully.');
    }

    public function render()
    {
        $query = Comment::with('purposeInsight')->latest();

        if (!empty($this->search)) {
            $s = '%' . trim($this->search) . '%';
            $query->where(function ($q) use ($s) {
                $q->where('name', 'like', $s)
                  ->orWhere('email', 'like', $s)
                  ->orWhere('comment', 'like', $s);
            });
        }

        if (!empty($this->filterInsightId)) {
            $query->where('purpose_insight_id', $this->filterInsightId);
        }

        if (!empty($this->filterType)) {
            $query->where('type', $this->filterType);
        }

        if ($this->filterStatus !== '') {
            $query->where('is_approved', (bool) $this->filterStatus);
        }

        $comments = $query->paginate(15);
        $insights = PurposeInsight::orderBy('title')->get(['id', 'title']);

        // Stats
        $stats = [
            'total' => Comment::count(),
            'questions' => Comment::where('type', 'question')->count(),
            'feedback' => Comment::where('type', 'feedback')->count(),
            'general' => Comment::where('type', 'comment')->count(),
            'replied' => Comment::whereNotNull('admin_reply')->count(),
        ];

        return view('livewire.superadmin.comments.comment-manager', compact('comments', 'insights', 'stats'))
            ->layout('layouts.app');
    }
}
