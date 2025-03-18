<x-app-layout>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h2>Courses Management</h2>
            <a href="{{ route('superadmin.courses.create') }}" class="btn btn-primary">Add New Course</a>
        </div>

        @if(session('success'))
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
                @foreach($courses as $key => $course)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $course->course_title }}</td>
                        <td>${{ number_format($course->course_price_usd, 2) }}<br> <br> <h7 style="color: rgb(7, 65, 137)">(#{{ number_format($course->course_price_ngn, 2) }})</h7></td>
                        <td>{{ $course->course_duration }}</td>
                        <td>
                            <img src="{{ asset('assets/img/' . $course->course_image) }}" 
                                 alt="{{ $course->course_title }}" width="80">
                        </td>
                        <td>
                            <a href="" target="_blank" class="btn btn-success btn-sm">Pay</a>
                        </td>
                        <td>
                            <a href="{{ $course->register_link }}" target="_blank" class="btn btn-info btn-sm">Register</a>
                        </td>
                        <td>
                            <!-- Dropdown Menu without Arrow -->
                            <div class="dropdown">
                                <button class="btn btn-sm" 
                                        type="button" id="dropdownMenuButton{{ $course->id }}" 
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti-more"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton{{ $course->id }}">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('superadmin.courses.edit', $course->id) }}">
                                            <i class="ti-pencil-alt"></i> Edit Course
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a class="dropdown-item text-danger confirm-delete" 
                                           href="#" onclick="confirmDelete({{ $course->id }})">
                                            <i class="ti-trash"></i> Delete Course
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Delete Form (Hidden) -->
                            <form id="delete-form-{{ $course->id }}" 
                                  action="{{ route('superadmin.courses.destroy', $course->id) }}" 
                                  method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(courseId) {
            if (confirm("Are you sure you want to delete this course?")) {
                document.getElementById('delete-form-' + courseId).submit();
            }
        }
    </script>    
</x-app-layout>
