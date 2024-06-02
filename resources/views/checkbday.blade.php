<!-- resources/views/search_results.blade.php -->
@include('libraries.styles')
@extends('layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Enter your birthdate</h1>
    <form action="{{ route('admission.checkBirthday', ['id' => $student->id]) }}" method="POST">
        @csrf
        <input type="date" name="bday" required>
        <button type="submit">Enter</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif   
</div>
@endsection
