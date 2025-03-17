<?php

// Super Admin Panel
use App\Livewire\Auth\Login;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\AuthController;

// Courses Management Routes
use App\Livewire\Superadmin\Courses\Index;
use App\Livewire\Superadmin\Courses\Create;
use App\Livewire\Superadmin\Courses\Edit;
use App\Http\Controllers\CourseController;;

// Website Controllers
use App\Models\Book;
use App\Models\Course;
use App\Livewire\CourseDetail;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Admin login Panel Routes

// Courses

Route::prefix('superadmin')->middleware(['auth'])->group(function () {
    Route::get('/courses', Index::class)->name('superadmin.courses.index');
    Route::get('/courses/create', Create::class)->name('superadmin.courses.create');
    Route::get('/courses/{course}/edit', Edit::class)->name('superadmin.courses.edit');

    // Add this for delete functionality
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('superadmin.courses.destroy');
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

Route::get('/dashboard', function () {
    return view('superadmin.dashboard');
})->name('dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


//Website Welcome page
Route::get('/', function () {
    $courses = Course::limit(3)->get();
    return view('welcome', compact('courses'));
})->name('welcome');

//Course Route
Route::get('/courses', function () {
    $courses = Course::all();
    return view('guests.courses.index', compact('courses'));
})->name('courses');


Route::get('/courses/{id}', function ($id) {
    $course = Course::findOrFail($id);
    return view('guests.courses.show', compact('course'));
})->name('courses.show');


//Books Route
Route::get('/books', function () {
    $books = Book::all()->groupBy('category'); // Group books by category
    return view('guests.books.index', compact('books'));
})->name('books.index');

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
    return view('guests.testimonials.index');
})->name('testimonials.index');






// Route::get('/show/{id}', function ($id) {
   // $course = Course::findOrFail($id);
    //return view('guests.books.show', compact('course'));
// })->name('courses.show');




// use App\Http\Controllers\SuperAdmin\CourseController;
// use App\Http\Controllers\SuperAdmin\BookController;
// use App\Http\Controllers\SuperAdmin\TestimonialController;

// Route::prefix('superadmin')->name('superadmin.')->group(function () {
//     // Authentication Routes
//     Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//     Route::post('/login', [AuthController::class, 'login'])->name('login.post');
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard Route
    //Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  

    // Profile Route
    //Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    // Course Management Routes (Uncomment when CourseController is ready)
    // Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    // Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    // Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    // Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    // Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
    // Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

    // Book Management Routes (Uncomment when BookController is ready)
    // Route::get('/books', [BookController::class, 'index'])->name('books.index');
    // Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    // Route::post('/books', [BookController::class, 'store'])->name('books.store');
    // Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    // Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
    // Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

    // Testimonial Management Routes (Uncomment when TestimonialController is ready)
    // Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    // Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
    // Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
    // Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    // Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
    // Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
//});
