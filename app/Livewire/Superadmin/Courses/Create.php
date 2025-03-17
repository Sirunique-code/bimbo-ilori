<?php

namespace App\Livewire\Superadmin\Courses;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Course;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;

    public $course_title, $course_description, $course_price_usd, $course_price_ngn, 
           $course_duration, $course_image, $pay_link, $register_link;

    protected $rules = [
        'course_title' => 'required|string|max:255',
        'course_description' => 'required|string',
        'course_price_usd' => 'required|numeric',
        'course_price_ngn' => 'required|numeric',
        'course_duration' => 'required|string',
        'course_image' => 'required|string', // Accept base64 image as string
        'pay_link' => 'required|url',
        'register_link' => 'required|url',
    ];

    public function store()
    {
        // Validate the inputs
        $this->validate();

        // Handle the image upload
        $courseImage = $this->uploadCourseImage($this->course_image);

        // Create the course
        Course::create([
            'course_title' => $this->course_title,
            'course_description' => $this->course_description,
            'course_price_usd' => $this->course_price_usd,
            'course_price_ngn' => $this->course_price_ngn,
            'course_duration' => $this->course_duration,
            'course_image' => $courseImage,  // Save the relative path
            'pay_link' => $this->pay_link,
            'register_link' => $this->register_link,
        ]);

        session()->flash('message', 'Course added successfully!');
        return redirect()->route('superadmin.courses.index');
    }

    // Upload course image (base64 string)
    public function uploadCourseImage($image)
    {
        // Extract base64 image
        $image_parts = explode(";base64,", $image);
        $image_base64 = base64_decode($image_parts[1]);
        
        // Generate a unique name for the image
        $imageName = Carbon::now()->timestamp . '.jpg';

        // Define the storage path for the image
        $imagePath = storage_path('app/public/assets/img/' . $imageName);
        
        // Process and save the image using Intervention Image
        $img = Image::make($image_base64)->encode('jpg', 60);
        file_put_contents($imagePath, $img->stream()->__toString());

        // Return the relative path to store in the database
        return 'assets/img/' . $imageName;
    }

    public function render()
    {
        return view('livewire.superadmin.courses.create');
    }
}
