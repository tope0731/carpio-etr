<!-- resources/views/admin/admissions/accepted.blade.php -->

@extends('admin_layout')

@section('content')

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Applicants</h1>
                </div>
<div class="container mt-5">
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
</div>
@endsection
