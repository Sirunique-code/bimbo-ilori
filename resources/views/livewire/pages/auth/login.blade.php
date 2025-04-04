<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | Admin Panel</title>
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/base/vendor.bundle.base.css') }}">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-img-bg" style="min-height: 100vh;">
                <div class="row flex-grow w-100 align-items-center">
                    <!-- Login Form Section -->
                    <div class="col-lg-6 col-md-8 col-sm-10 mx-auto d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3 w-100">
                            <div class="brand-logo text-center">
                                <img src="{{ asset('assets/img/bi-logo-full2.png') }}" alt="logo" >
                            </div>
                      
                            <h3 class="font-weight-light text-center">Please log in to continue</h3>

                            <!-- Laravel Authentication Form -->
                            <form method="POST" action="{{ route('login') }}" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="ti-user text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="email" class="form-control form-control-lg border-left-0" 
                                            id="email" placeholder="Enter your email" required>
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="ti-lock text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control form-control-lg border-left-0" 
                                            id="password" placeholder="Enter your password" required>
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                        <label class="form-check-label text-muted" for="remember">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                                </div>

                                <div class="my-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        LOGIN
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/admin/js/template.js') }}"></script>
    <script src="{{ asset('assets/admin/js/todolist.js') }}"></script>
</body>
</html>
