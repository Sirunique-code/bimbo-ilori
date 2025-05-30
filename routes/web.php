<?php

// Super Admin Panel
use App\Models\Book;
use App\Models\Quote;
use App\Models\Course;

// Courses Management Controller
use App\Models\Testimonial;
use App\Livewire\Auth\Login;
use App\Livewire\CourseDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;



// Books Management Controlller
use App\Livewire\Superadmin\Courses\Edit;

//NewsLetter controller
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSubscriptionConfirmation;


// Website Controllers
use App\Http\Controllers\CourseController;
use App\Livewire\Superadmin\Courses\Index;
use App\Http\Controllers\ContactController;
use App\Livewire\Superadmin\Dashboard;
use App\Livewire\Superadmin\Courses\Create;
use App\Livewire\Superadmin\Books\BookManager;
use App\Livewire\Superadmin\Quotes\QuotesGallery;
use App\Http\Controllers\SuperAdmin\AuthController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Livewire\Superadmin\Testimonial\TestimonialsComponent;

use App\Http\Controllers\RegistrationController;


// Admin login Panel Routes

// Courses Panel
// Courses Panel
Route::prefix('superadmin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/courses', Index::class)->name('superadmin.courses.index');
    Route::get('/courses/create', Create::class)->name('superadmin.courses.create');
    Route::get('/courses/{course}/edit', Edit::class)->name('superadmin.courses.edit');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('superadmin.courses.destroy');

    // Books Panel
    Route::get('/books', BookManager::class)->name('superadmin.books.book-manager');

    // ✅ Testimonials Panel
    Route::get('/testimonials', TestimonialsComponent::class)->name('superadmin.testimonials.index');

     // ✅ Quotes Management Panel
     Route::get('/quotes', QuotesGallery::class)->name('superadmin.quotes.index');
});

// Show login page
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
;

//logout route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


//Website Panel Routes

Route::view('/', 'welcome');

// Route::get('/dashboard', function () {
//     return view('superadmin.dashboard');
// })->name('dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


//Website Welcome page
Route::get('/', function () {
    $courses = Course::limit(3)->get();
    return view('welcome', compact('courses'));
})->name('welcome');



// List All Courses
Route::get('/our-courses', function () {
    $courses = Course::all();
    return view('guests.courses.index', compact('courses'));
})->name('courses');

// Show Single Course Details
Route::get('/courses/{course}', function (Course $course) {
    return view('guests.courses.show', compact('course'));
})->name('courses.show');

// Success Page Route
Route::get('/payment/success', function () {
    return view('guests.courses.success'); // Updated path
})->name('payment.success');

// Error Page Route
Route::get('/payment/error', function () {
    return view('guests.courses.error'); // Updated path
})->name('payment.error');





//Books Route
Route::get('/books', function () {
    $books = Book::all()->groupBy('category'); // Group books by category
    return view('guests.books.index', compact('books'));
})->name('books.index');

Route::get('/book/{id}', function ($id) {
    $book = Book::findOrFail($id);
    return view('guests.books.show', compact('book'));
})->name('books.show');

//About Route
Route::get('/about', function () {
    return view('guests.about.index');
})->name('about.index');


//Contact Us Route
Route::get('/contact', function () {
    return view('guests.contact.index');
})->name('contact.index');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

//Testimonials Route
Route::get('/testimonials', function () {
    $testimonials = Testimonial::all();
    $quotes = Quote::all();
    return view('guests.testimonials.index', compact('testimonials', 'quotes'));
})->name('testimonials.index');


// Handle newsletter subscription form submission
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

// View all subscribed emails
Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');

Route::get('/test-no-reply', function () {
    $email = 'uniquecreativenotion@gmail.com'; // Replace with your test email address
    Mail::to($email)->send(new NewsletterSubscriptionConfirmation($email));
    return 'Test email sent!';
});

//Courses Landing pages Routes
Route::get('/rightreset', function(){
    return view('guests.landing.rightreset.index');
})->name('rightreset');


//Thank you Route
Route::get('/thank-you', function () {
    return view('guests.thank-you');
})->name('thank-you');

//Privacy-Policy
Route::get('/privacy-policy', function () {
    return view('guests.privacy-policy');
})->name('privacy-policy');



Route::post('/register', [RegistrationController::class, 'store'])->name('register.submit');


