<x-guest-layout>
    <div class="container text-center">
        <h1>Payment Failed</h1>
        <p>{{ session('error') }}</p>
        <a href="{{ route('courses') }}" class="btn btn-secondary">Back to Courses</a>
    </div>
</x-guest-layout>