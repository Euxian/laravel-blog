@extends('template.main')
@section('container')
    <h1>Ini About Cuyy</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $images }}" alt="{{ $name }}" width="350"> 
@endsection
