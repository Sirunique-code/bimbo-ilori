
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="{{ asset('assets/admin/images/logo.svg') }}">
                        </div>
                        <h4>Hello! Let's get Grinding</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        
                        <form class="pt-3" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                            </div>

                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" name="remember" class="form-check-input"> Keep me signed in 
                                    </label>
                                </div>
                                <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

