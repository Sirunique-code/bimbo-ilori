<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'purpose_insight_id',
        'name',
        'email',
        'comment',
        'type',
        'is_approved',
        'admin_reply',
        'admin_replied_at',
        'ip_address',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
        'admin_replied_at' => 'datetime',
    ];

    /**
     * The article/insight this comment belongs to.
     */
    public function purposeInsight()
    {
        return $this->belongsTo(PurposeInsight::class, 'purpose_insight_id');
    }

    /**
     * Get avatar URL for the author.
     */
    public function getAvatarUrlAttribute(): string
    {
        $name = urlencode(trim($this->name) ?: 'Reader');
        return "https://ui-avatars.com/api/?name={$name}&background=3F207F&color=fff&rounded=true&bold=true&size=80";
    }

    /**
     * Get badge label and class for the comment type.
     */
    public function getTypeBadgeAttribute(): array
    {
        return match ($this->type) {
            'question' => [
                'label' => 'Question',
                'class' => 'bg-info text-white',
                'icon' => 'fa fa-question-circle',
            ],
            'feedback' => [
                'label' => 'Feedback',
                'class' => 'bg-success text-white',
                'icon' => 'fa fa-lightbulb',
            ],
            default => [
                'label' => 'Comment',
                'class' => 'bg-primary text-white',
                'icon' => 'fa fa-comment-dots',
            ],
        };
    }
}
