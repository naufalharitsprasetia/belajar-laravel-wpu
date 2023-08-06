@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show fw-normal fs-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show fw-normal fs-3" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-bold text-center">Please Login</h1>

                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required />
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                            required />
                        <label for="password">Password</label>

                    </div>

                    <button class="btn btn-primary w-100 py-2 " type="submit">
                        Sign in
                    </button>
                </form>
                <small class="d-block text-center mt-3 ">Not Registered? <a href="/register">Register Now!</a></small>
                <p class="mt-3 mb-3 text-body-secondary">&copy; 2023</p>
            </main>
        </div>
    </div>
@endsection
 