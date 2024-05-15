<!-- resources/views/admin/admissions/accepted.blade.php -->

@extends('admin_layout')

@section('content')
<div class="container mt-5">
    <h1>Accepted Admissions</h1>
    
    @if($acceptedAdmissions->isEmpty())
        <div class="alert alert-info mt-3" role="alert">
            No accepted admissions found.
        </div>
    @else
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Student Name</th>
                    <th scope="col">Campus</th>
                    <th scope="col">First Choice</th>
                    <th scope="col">Second Choice</th>
                    <th scope="col">Third Choice</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acceptedAdmissions as $admission)
                    <tr>
                        <td>{{ $admission->student_name }} {{ $admission->student_mname }} {{ $admission->student_lname }}</td>
                        <td>{{ $admission->campus }}</td>
                        <td>{{ $admission->first_choice }}</td>
                        <td>{{ $admission->second_choice }}</td>
                        <td>{{ $admission->third_choice }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
