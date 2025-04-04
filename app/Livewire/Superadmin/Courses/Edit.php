<?php

namespace App\Livewire\Superadmin\Courses;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $courseId, $course_title, $course_price_usd, $course_price_ngn, $course_duration, $course_description, $pay_link, $register_link;
    public $current_course_image, $new_course_image; // Image handling

    public function mount(Course $course)
    {
        if (!$course) {
            session()->flash('error', 'Course not found.');
            return redirect()->route('superadmin.courses.index');
        }

        $this->courseId = $course->id;
        $this->course_title = $course->course_title;
        $this->course_price_usd = $course->course_price_usd;
        $this->course_price_ngn = $course->course_price_ngn;
        $this->course_duration = $course->course_duration;
        $this->course_description = $course->course_description;
        $this->pay_link = $course->pay_link;
        $this->register_link = $course->register_link;
        $this->current_course_image = $course->course_image; // Store current image
    }

    public function updateCourse()
    {
        $this->validate([
            'course_title' => 'required|string|max:255',
            'course_price_usd' => 'required|numeric',
            'course_price_ngn' => 'required|numeric',
            'course_duration' => 'required|string|max:50',
            'course_description' => 'required',
            'pay_link' => 'required|url',
            'register_link' => 'required|url',
            'new_course_image' => 'nullable|image|max:2048', // Image validation
        ]);

        $course = Course::find($this->courseId);
        
        if (!$course) {
            session()->flash('error', 'Course not found.');
            return redirect()->route('superadmin.courses.index')->layout('layouts.app');
        }

        // Handle Image Upload
        if ($this->new_course_image) {
            $imageName = $this->new_course_image->store('assets/img', 'public');
            $course->course_image = basename($imageName); // Save new image name

            // Optional: Delete Old Image if needed
            if ($this->current_course_image && file_exists(public_path('assets/img/' . $this->current_course_image))) {
                unlink(public_path('assets/img/' . $this->current_course_image));
            }

            // Update current image preview after upload
            $this->current_course_image = basename($imageName);
        }

        // Update Other Course Fields
        $course->update([
            'course_title' => $this->course_title,
            'course_price_usd' => $this->course_price_usd,
            'course_price_ngn' => $this->course_price_ngn,
            'course_duration' => $this->course_duration,
            'course_description' => $this->course_description,
            'pay_link' => $this->pay_link,
            'register_link' => $this->register_link,
        ]);

        session()->flash('message', 'Course updated successfully!');
        return redirect()->route('superadmin.courses.index');
    }

    public function render()
    {
        return view('livewire.superadmin.courses.edit', [
            'current_course_image' => $this->current_course_image, // Pass image to Blade file
        ])->layout('layouts.app');
    }
}
