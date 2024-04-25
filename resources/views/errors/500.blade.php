@extends('errors.errors_layout')

@section('title')
    500 - Internal Server Error
@endsection

@section('error-content')
    <h2>500</h2>
    <p>Internal Server Error!</p>
    <a href="{{ route('dashboard') }}" class="btn btn-primary" >Back to Dashboard</a>
    <a href="{{ route('login') }}" class="btn btn-primary" >Login Again !</a>
@endsection