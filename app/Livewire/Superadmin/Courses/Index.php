<?php

namespace App\Livewire\Superadmin\Courses;

use Livewire\Component;
use App\Models\Course;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = ['confirmDelete' => 'deleteCourse'];

    public function render()
    {
        $courses = Course::paginate(10);
        return view('livewire.superadmin.courses.index', compact('courses'));
    }

    public function confirmDelete($id)
    {
        $this->dispatch('delete-course-confirmation', $id);
    }

    public function deleteCourse($id)
    {
        $course = Course::find($id);

        if (!$course) {
            session()->flash('error', 'Course not found.');
            return;
        }

        $course->delete();
        session()->flash('message', 'Course deleted successfully!');

        $this->resetPage(); // Reset pagination to avoid missing records
    }
}
