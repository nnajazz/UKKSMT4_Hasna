<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sign In | Dashonic - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />

    @include('include.styledash')
</head>

<body>
    <div class="authentication-bg min-vh-100">
        <!-- Overlay putih semi-transparan -->
        <!-- ✅ Tambahkan ini: background image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="{{ asset('assetsa/images/auth.jpg') }}"
                class="w-100 h-100 object-fit-cover"
                style="object-fit: cover; z-index: 0;"
                alt="Background Image">
        </div>

        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center py-5">
                            <div class="mb-4 mb-md-5">
                                <a href="#" class="d-block auth-logo">
                                    <img src="{{ asset('assetsa/images/logo-dark.png') }}" alt="" height="22" class="auth-logo-dark">
                                    <img src="{{ asset('assetsa/images/logo-light.png') }}" alt="" height="22" class="auth-logo-light">
                                </a>
                            </div>
                            <div class="mb-4">
                                <h5>Welcome Back!</h5>
                                <p>Sign in to continue to Dashonic.</p>
                            </div>
                            <form method="post" action="{{ route('auth') }}">
                                @csrf
                                <div class="form-floating form-floating-custom mb-3">
                                    <input type="email" class="form-control" id="input-username" name="email" placeholder="Enter Username">
                                    <label for="input-username">Email</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>

                                <div class="form-floating form-floating-custom mb-3">
                                    <input type="password" class="form-control" id="input-password" name="password" placeholder="Enter Password">
                                    <label for="input-password">Password</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-padlock"></i>
                                    </div>
                                </div>

                                <div class="form-check form-check-info font-size-16">
                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                    <label class="form-check-label font-size-14" for="remember-check">
                                        Remember me
                                    </label>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-info w-100" type="submit">Log In</button>
                                </div>

                                <div class="mt-4">
                                    <a href="#" class="text-muted text-decoration-underline">Forgot your password?</a>
                                </div>
                            </form>

                            <div class="mt-5 text-center text-muted">
                                <p>Don't have an account? <a href="#" class="fw-medium text-decoration-underline"> Signup </a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center text-muted p-4">
                            <p class="mb-0">&copy; <script>
                                    document.write(new Date().getFullYear())
                                </script> Dashonic. Crafted with <i class="mdi mdi-heart text-danger"></i> by Pichforest</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('include.script')
</body>

</html>