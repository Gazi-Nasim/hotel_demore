@extends('errors.errors_layout')

@section('title')
    403 - Access Denied
@endsection

@section('error-content')
    <h2>403</h2>
    <p>Access to this resource on the server is denied</p>
    <hr>
    <p class="mt-2">
        {{ $exception->getMessage() }}
    </p>
    <a href="{{ route('dashboard') }}" class="btn btn-primary" >Back to Dashboard</a>
    <a href="{{ route('login') }}" class="btn btn-primary" >Login Again !</a>
@endsection