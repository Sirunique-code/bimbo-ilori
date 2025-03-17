<?php

namespace App\Livewire\Superadmin\Courses;

use Livewire\Component;
use App\Models\Course;

class Edit extends Component
{
    public $courseId, $course_title, $course_price_usd, $course_price_ngn, $course_duration, $course_description, $pay_link, $register_link;

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
        ]);

        $course = Course::find($this->courseId);
        
        if (!$course) {
            session()->flash('error', 'Course not found.');
            return redirect()->route('superadmin.courses.index');
        }

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
        return view('livewire.superadmin.courses.edit');
    }
}
