<!-- resources/views/admin/admissions/accepted.blade.php -->

@extends('admin_layout')

@section('content')
<style>
    .dropdown-form {
    margin-top: 20px; /* Adjust as needed */
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #3498db;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #2980b9;
}

</style>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Accepted Applicants</h1>
                        <form action="{{ route('filterYearAccepted') }}" method="GET">
                            <div class="dropdown">
                            <button class="dropbtn">{{ $filter ?? 'Filter by year' }}</button>
                                <div class="dropdown-content">
                                    <a href="/admin/accepted-admissions">All</a>
                                    <a href="{{ route('filterYearAccepted', ['filterYear' => 2024]) }}">2024</a>
                                    <a href="{{ route('filterYearAccepted', ['filterYear' => 2023]) }}">2023</a>
                                    <a href="{{ route('filterYearAccepted', ['filterYear' => 2022]) }}">2022</a>
                                    <a href="{{ route('filterYearAccepted', ['filterYear' => 2021]) }}">2021</a>
                                    <!-- Add more years as needed -->
                                </div>
                            </div>
                        </form>
                </div>
<div class="container mt-5">
    
    @if($acceptedAdmissions->isEmpty())
        <div class="alert alert-info mt-3" role="alert">
            No waitlisted admissions found.
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
                    <th scope="col">Accept</th>
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
                        <td>
                            <form action="{{ route('admission.accept', $admission->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Accept
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</div>
@endsection
