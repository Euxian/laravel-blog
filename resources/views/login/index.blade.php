@extends('template.main')
@section('container')
<section>
{{-- ANIMTED LOGIN --}}
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
{{-- END ANIMATED LOGIN --}}
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if (session()->has('Success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('Success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endif
            @if (session()->has('Login Error'))
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('Login Error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            @endif
            <main class="form-signin">
                <div class="container2">
                <p>Hello im <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
            </div>
                {{-- <h1 class="<b>h2</b> mb-3 fw-normal text-center">Login</h1> --}}
                <p class="text-center">Please login to use this site!</p>
                <div class="d-grid mt-5">
                    <button type="submit" class="btn btn-light btn-gmail mb-3"><img src="/gambar/search.png" alt="Gmail" class="img-style me-2">Sign up with Gmail</button>
                </div>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('name') is-invalid @enderror" id="email" placeholder="name@example.com"
                        required autofocus value={{old('name')}}>
                        <label for="email">Email Adress</label>
                        @error ('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required> 
                        <label for="password">Password</label>
                        @error ('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-login" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered ? <a href="/registrasi" class="text-decoration-none">Register Now</a></small>
            </main>
        </div>
        <footer>
            <p class="mt-5 text-muted text-center"> Made with <i class="bis bi-heart-fill"></i></p>
            <p class="text-center text-muted mt-1">&copy;Designed by Ian</p>
        </footer>
    </div>
</section>
<script src="main.js"></script>
@endsection
