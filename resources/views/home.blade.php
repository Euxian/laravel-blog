@extends('template.main')
    
    @section('container')
    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="video/take-me-home.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1>Home</h1>
            <a href="/login">Explore</a>
        </div>
    </div>
    @endsection
