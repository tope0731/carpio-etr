<!-- resources/views/search_results.blade.php -->
@include('libraries.styles')
@extends('layout')

@section('content')
<div class="container">
    <h1 class="mt-5">Search Results</h1>

    @if($results->isEmpty())
    <div class="alert alert-info mt-3" role="alert">
        No admissions found matching your criteria.
    </div>
    @else
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Student Name</th>
                <th scope="col">Campus</th>
                <th scope="col">Action</th>
                <!-- Add other necessary columns -->
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
            <tr>
                <td>{{ $result->student_name }} {{ $result->student_mname }} {{ $result->student_lname }}</td>
                <td>{{ $result->campus }}</td>
                <td>
                    <a href="{{ route('admission.show', $result->id) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        View Status
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
