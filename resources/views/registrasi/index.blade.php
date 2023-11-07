@extends('template.main')

@section('container')
<div class="form-regis">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="<b>h2</b> mb-4 fw-normal text-center">Registration Form</h1>
                <form action="/registrasi" method="post">
                    {{-- BUBBLE --}}
                    <div id="background-wrap">
                        <div class="bubble x1"></div>
                        <div class="bubble x2"></div>
                        <div class="bubble x3"></div>
                        <div class="bubble x4"></div>
                        <div class="bubble x5"></div>
                        <div class="bubble x6"></div>
                        <div class="bubble x7"></div>
                        <div class="bubble x8"></div>
                        <div class="bubble x9"></div>
                        <div class="bubble x10"></div>
                    </div>
                    {{-- END BUBBLE --}}
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" 
                        placeholder="name" value="{{old('name')}}">
                        <label for="name">Name</label>
                        @error ('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{old('email')}}">
                        <label for="email">Email Adress</label>
                        @error ('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom @error ('password') is-invalid @enderror" id="password" placeholder="Password" value="{{old('password')}}">
                        <label for="password">Password</label>
                        @error ('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-regis mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered ? <a href="/login" class="text-decoration-none">Login</a></small>
            </main>
        </div>
    <footer>
        <p class="mt-5 text-muted text-center">Made with <i class="bis bi-heart-fill"></i></p>
        <p class="text-center text-muted mt-1">&copy;Designed by Ian</p>
    </footer>
    </div>
@endsection