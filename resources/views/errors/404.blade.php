@extends('errors.errors_layout')

@section('title')
404 - Page Not Found
@endsection

@section('error-content')
    <h2>404</h2>
    <p>Sorry ! Page Not Found !</p>
    {{--<a href="{{ route('dashboard') }}" class="btn btn-primary" >Back to Dashboard</a>
    <a href="{{ route('login') }}" class="btn btn-primary" >Login Again !</a>--}}
@endsection