<!-- resources/views/search_results.blade.php -->
@include('libraries.styles')
@extends('layout')

@section('content')
<div class="container">
    <form action="{{ route('admission.checkBirthday', ['id' => $student->id]) }}" method="POST">
        @csrf

        <div class="row justify-content-center">
            
        <div class="col-lg-6"><p>Enter your birthdate</p></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="date" name="bday" class="form-control" required>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </div>
            </div>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection
