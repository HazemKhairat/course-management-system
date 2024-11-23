<!DOCTYPE html>
<html lang="en">
@include('pages.head')

<body>
<main>
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                <p class="text-center small">Enter your personal details to create account</p>
                            </div>

                            <form class="row g-3" method="POST" action="{{ route(name: 'register') }}">
                                @csrf

                                <div class="col-md-12">
                                    <label for="yourName" class="form-label">Your Name</label>

                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="yourEmail" class="form-label">Your Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <label for="yourPassword" class="form-label">Password</label>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="password-confirm"
                                        class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <button class="btn btn-primary w-100 my-3" type="submit">Create Account</button>
                                </div>

                                <div class="col-12">
                                    <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a>
                                    </p>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

</div>
</main>

@include('pages.footer')
    @include('pages.script')
</body>

</html>

