<?php

namespace App\Livewire\Superadmin\Courses;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Course;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;

    public $course_title, $course_description, $course_price_usd = 0, $course_price_ngn = 0, 
           $course_duration, $course_image, $pay_link, $register_link;

    protected $rules = [
        'course_title' => 'required|string|max:255',
        'course_description' => 'required|string',
        'course_price_usd' => 'required|numeric',
        'course_price_ngn' => 'required|numeric',
        'course_duration' => 'required|string',
        'course_image' => 'nullable|image|max:1024', // Accept image upload (max 1MB)
        'pay_link' => 'nullable|url',
        'register_link' => 'nullable|url',
    ];

    public function store()
    {
        $validatedData = $this->validate();

        // Image Upload Handling
        if ($this->course_image) {
            $imageName = time() . '.' . $this->course_image->getClientOriginalExtension();
            $this->course_image->storeAs('public/courses', $imageName);

            $validatedData['course_image'] = 'courses/' . $imageName;
        }

        Course::create($validatedData);

        session()->flash('message', 'Course added successfully!');
        return redirect()->route('superadmin.courses.index');
    }

    public function render()
    {
        return view('livewire.superadmin.courses.create');
    }
}
