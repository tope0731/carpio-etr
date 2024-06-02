@include('libraries.styles')
@extends('layout')
@section('content')
<style>
    
    .requirements {
        background-color: white;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
<div class="container">
        <section class="requirements">
            <h2>Board and Non-Board Courses</h2 >
            <br>
            <h4>A. FOR APPLICANTS OF PROGRAM WITH BOARD EXAM</h4>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Applicant should pass the PSU College Admission Test</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. The applicant should obtain a GWA of 85% or above</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Applicant should undergo interview</p>
            <h4>B. FOR APPLICANTS OF PROGRAM WITHOUT BOARD EXAM</h4>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Applicant should pass the PSU College Admission Test</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Applicant should undergo interview</p>

            <p>Computation for the selection of the students guided by the quota set by the program: <br>
            PSU CAT Result: 40% <br>
            Gen. Weighted Ave: 30% <br>
            Interview: 30% <br><br>
            *** All programs have corresponding quota of students to be admitted for enrollment.</p>
        </section>
    
</div>
@endsection