<x-guest-layout>
    <div class="container text-center py-5">
        <h1 class="text-success">Payment Successful!</h1>
        <p>{{ session('message') }}</p>
        @if(session('course_name'))
            <p>Thank you for purchasing <strong>{{ session('course_name') }}</strong>.</p>
        @endif
        <a href="{{ route('courses') }}" class="btn btn-primary">Back to Courses</a>
    </div>
</x-guest-layout>