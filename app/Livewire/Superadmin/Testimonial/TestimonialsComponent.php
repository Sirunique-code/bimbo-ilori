<?php

namespace App\Livewire\Superadmin\Testimonial;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Testimonial;

class TestimonialsComponent extends Component
{
    use WithFileUploads;

    public $image, $testimonial_id;
    public $showForm = false, $isEditMode = false;

    public function render()
    {
        return view('livewire.superadmin.testimonial.testimonials-component', [
            'testimonials' => Testimonial::all()
        ])->layout('layouts.app');
    }
    

    public function showCreateForm()
    {
        $this->resetInputFields();
        $this->showForm = true;
    }

    public function store()
    {
        $this->validate([
            'image' => 'required|image|max:2048',
        ]);

        $imageName = $this->image->store('testimonials', 'public');

        Testimonial::create([
            'image' => $imageName,
        ]);

        session()->flash('message', 'Testimonial Image Added Successfully.');
        $this->resetInputFields();
        $this->showForm = false;
    }

    public function delete($id)
    {
        Testimonial::findOrFail($id)->delete();
        session()->flash('message', 'Testimonial Deleted Successfully.');
    }

    public function resetInputFields()
    {
        $this->image = '';
        $this->testimonial_id = null;
        $this->showForm = false;
        $this->isEditMode = false;
    }
}
