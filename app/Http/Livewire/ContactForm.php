<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactForm extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required|string',
    ];
    
    public function render()
    {
        return view('livewire.contact-form');
    }

    public function sendMessage()
    {
        $this->validate();

        $data = [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ];

        Mail::to('contact@bimboilori.com')->send(new ContactMail($data));

        session()->flash('success', 'Your message has been sent successfully.');
        $this->reset();
    }

    public function subscribe()
    {
        $this->validate([
            'newsletterEmail' => 'required|email',
        ]);

        Mail::to('contact@bimboilori.com')->send(new NewsletterMail($this->newsletterEmail));

        $this->newsletterMessage = 'Thanks for subscribing!';
        $this->reset('newsletterEmail');
    }
    
}
