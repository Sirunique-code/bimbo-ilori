<?php

namespace App\Livewire\Superadmin\Courses;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;

    public $course_title;
    public $course_description;
    public $course_price_usd = 0; // Initialize with a default value
    public $course_price_ngn = 0; // Initialize with a default value
    public $course_duration;
    public $course_image;
    public $register_link;
    public $pay_link;

    protected $rules = [
        'course_title' => 'required|string|max:255',
        'course_description' => 'nullable|string',
        'course_price_usd' => 'required|numeric|min:0', // Ensure numeric input
        'course_price_ngn' => 'required|numeric|min:0', // Ensure numeric input
        'course_duration' => 'required|string|max:255',
        'course_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'register_link' => 'nullable|url',
        'pay_link' => 'nullable|url',
    ];

    public function store()
    {
        

        // Validate input data
        $validatedData = $this->validate();

        // Convert prices to ensure they are stored correctly
        $validatedData['course_price_usd'] = floatval($this->course_price_usd);
        $validatedData['course_price_ngn'] = floatval($this->course_price_ngn);

       

        // Handle Image Upload
        if ($this->course_image) {
            // Generate a unique filename for the image
            $imageName = time() . '.' . $this->course_image->getClientOriginalExtension();

            // Store the file in the "courses" directory using the "public" disk
            $filePath = $this->course_image->storeAs('courses', $imageName, 'public');

            // Save the correct path for database storage
            $validatedData['course_image'] = $filePath;
        }

        // Create the course record in the database
        Course::create($validatedData);

        // Flash success message and redirect
        session()->flash('message', 'Course added successfully!');
        return redirect()->route('superadmin.courses.index');
    }

    public function render()
    {
        return view('livewire.superadmin.courses.create')->layout('layouts.app');
    }
}
