<x-app-layout>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h2>Courses Management</h2>
            <a href="{{ route('superadmin.courses.create') }}" class="btn btn-primary text-white">Add New Course</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price (USD)</th>
                    <th>Duration</th>
                    <th>Image</th>
                    <th>Payment Link</th>
                    <th>Registration Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $key => $course)
                <tr wire:key="course-{{ $course->id }}">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $course->course_title }}</td>
                        <td>${{ number_format($course->course_price_usd, 2) }}<br> <br>
                            <h7 style="color: rgb(7, 65, 137)">(#{{ number_format($course->course_price_ngn, 2) }})</h7>
                        </td>
                        <td>{{ $course->course_duration }}</td>
                        <td>
                            <img src="{{ asset('assets/img/' . $course->course_image) }}" 
                                 alt="{{ $course->course_title }}" width="80">
                        </td>
                        <td>
                            <a href="" target="_blank" class="btn btn-success btn-sm">Pay</a>
                        </td>
                        <td>
                            <a href="{{ $course->register_link }}" target="_blank"
                                class="btn btn-info btn-sm">Register</a>
                        </td>
                        <td>
                            <!-- Dropdown Menu without Arrow -->
                            <div class="dropdown">
                                <button class="btn btn-sm" type="button" id="dropdownMenuButton{{ $course->id }}"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti-more"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="dropdownMenuButton{{ $course->id }}">
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('superadmin.courses.edit', $course->id) }}">
                                            <i class="ti-pencil-alt"></i> Edit Course
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"
                                            onclick="Livewire.dispatch('confirmDelete', { id: {{ $course->id }} })">
                                            <i class="ti-trash"></i> Delete Course
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
