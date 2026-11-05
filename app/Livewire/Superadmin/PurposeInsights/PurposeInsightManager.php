<?php

namespace App\Livewire\Superadmin\PurposeInsights;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PurposeInsight;
use App\Models\NewsletterSubscriber;
use App\Mail\NewPurposeInsightMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PurposeInsightManager extends Component
{
    use WithFileUploads;

    public $insights;
    public $insight_id;
    public $title, $category, $opening_tip, $content, $image, $existing_image, $is_published = true;
    public $remove_image = false;
    public $notify_subscribers = false;
    public $isEditing = false;

    public $categories = [
        'Faith Development' => 'The Faith Rise Series',
        'Purpose & Personal Discovery' => 'The Purpose Series',
        'Parenting & Child Development' => 'The Parenting Series',
        'Health, Wellness & Lifestyle' => 'The Wellness Series',
        'Overcoming Obstacles & Resilience' => 'The Overcomer Series',
        'Redemption & Restoration' => 'The Redemption Series',
        'Business & Entrepreneurship' => 'The Business Insight Series',
        'Leadership & Influence' => 'The Leadership Skill Series',
        'Relationships, Love & Emotional Wholeness' => 'The Relationship Series',
        'Personal Effectiveness & Life Skills' => 'The Personal Skills Series',
        'Insight, Discernment & Wisdom' => 'The Insight Series',
        'Marriage & Family Life' => 'The Marriage Series'
    ];

    public function mount()
    {
        $this->loadInsights();
    }

    public function loadInsights()
    {
        $this->insights = PurposeInsight::withCount('comments')->latest()->get();
    }

    public function resetFields()
    {
        $this->resetValidation();
        $this->insight_id = null;
        $this->title = '';
        $this->category = '';
        $this->opening_tip = '';
        $this->content = '';
        $this->image = null;
        $this->existing_image = null;
        $this->remove_image = false;
        $this->is_published = true;
        $this->notify_subscribers = false;
        $this->isEditing = false;
    }

    public function removeExistingImage()
    {
        $this->existing_image = null;
        $this->remove_image = true;
    }

    public function cancelNewImage()
    {
        $this->image = null;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'opening_tip' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|max:3072', // Max 3MB
        ]);

        if ($this->isEditing) {
            $insight = PurposeInsight::findOrFail($this->insight_id);

            $imagePath = $insight->image;

            if ($this->image) {
                if ($insight->image && Storage::disk('public')->exists($insight->image)) {
                    Storage::disk('public')->delete($insight->image);
                }
                $imagePath = $this->image->store('purpose-insights', 'public');
            } elseif ($this->remove_image) {
                if ($insight->image && Storage::disk('public')->exists($insight->image)) {
                    Storage::disk('public')->delete($insight->image);
                }
                $imagePath = null;
            }

            // Keep slug if title has not changed, otherwise update
            $slug = $insight->slug;
            if ($insight->title !== $this->title || empty($slug)) {
                $slug = Str::slug($this->title) . '-' . substr(md5(time()), 0, 4);
            }

            $insight->update([
                'title' => $this->title,
                'slug' => $slug,
                'category' => $this->category,
                'opening_tip' => $this->opening_tip,
                'content' => $this->content,
                'image' => $imagePath,
                'is_published' => (bool) $this->is_published,
            ]);

            session()->flash('message', 'Purpose Insight updated successfully!');
        } else {
            $imagePath = null;
            if ($this->image) {
                $imagePath = $this->image->store('purpose-insights', 'public');
            }

            $insight = PurposeInsight::create([
                'title' => $this->title,
                'slug' => Str::slug($this->title) . '-' . substr(md5(time()), 0, 4),
                'category' => $this->category,
                'opening_tip' => $this->opening_tip,
                'content' => $this->content,
                'image' => $imagePath,
                'is_published' => (bool) $this->is_published,
                'published_at' => now(),
            ]);

            session()->flash('message', 'Purpose Insight published successfully!');
        }

        // Send Email Notification if requested
        if ($this->notify_subscribers) {
            $this->broadcastToSubscribers($insight);
        }

        $this->resetFields();
        $this->loadInsights();
    }

    public function edit($id)
    {
        $this->resetValidation();
        $insight = PurposeInsight::findOrFail($id);
        $this->insight_id = $insight->id;
        $this->title = $insight->title;
        $this->category = $insight->category;
        $this->opening_tip = $insight->opening_tip;
        $this->content = $insight->content;
        $this->existing_image = $insight->image;
        $this->image = null;
        $this->remove_image = false;
        $this->is_published = (bool) $insight->is_published;
        $this->notify_subscribers = false;
        $this->isEditing = true;

        $this->dispatch('scroll-to-form');
    }

    public function delete($id)
    {
        $insight = PurposeInsight::findOrFail($id);
        if ($insight->image && Storage::disk('public')->exists($insight->image)) {
            Storage::disk('public')->delete($insight->image);
        }
        $insight->delete();

        if ($this->insight_id === $id) {
            $this->resetFields();
        }

        session()->flash('message', 'Insight deleted successfully!');
        $this->loadInsights();
    }

    public function broadcastToSubscribers($insightId)
    {
        $insight = $insightId instanceof PurposeInsight ? $insightId : PurposeInsight::findOrFail($insightId);
        $subscribers = NewsletterSubscriber::all();

        $count = 0;
        foreach ($subscribers as $subscriber) {
            if (!empty($subscriber->email)) {
                try {
                    Mail::to($subscriber->email)->send(new NewPurposeInsightMail($insight));
                    $count++;
                } catch (\Exception $e) {
                    // Log or ignore individual email errors
                }
            }
        }

        session()->flash('message', "Opening tip email sent to {$count} subscriber(s)!");
    }

    public function render()
    {
        return view('livewire.superadmin.purpose-insights.purpose-insight-manager')->layout('layouts.app');
    }
}
