@include('libraries.styles')
@extends('layout')
@section('content')
<style>
    .requirements,
    .note {
        background-color: white;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    a {
        color: #003366; 
        text-decoration: none;
    }

    .btn-primary {
        background-color: #003366;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-primary:hover {
        background-color: #002245;
    }
    
</style>
<div class="container">
    <section class="requirements">
        <h2>Admission Requirements</h2>
        <p>Deadline of Application - May 17, 2025</p>
        <ol>
            <li>Please ensure that you have a softcopy of the following requirements to be uploaded before proceeding:
                <ul>
                    <li>2x2 picture in white background</li>
                    <li>Clear copy of grades
                        <ul>
                            <li>Grade 11 card for graduating Senior High School</li>
                            <li>Grade 12 for graduates of Senior High School</li>
                            <li>Certification of Grades or Transcript of Records for Transferees</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Only ONE application can be filed for the whole University System. Multiple submissions can be grounds for disqualification.</li>
        </ol>
    </section>
    <section class="note">
        <p style="color: red;"><strong>Note:</strong> Some academic programs may have other officially approved requirements prior to admission. If you wish to change any part of the application, contact the campus where the application was submitted.</p>
    </section>
    <a href="/admission" class="btn btn-primary">Proceed to Registration</a>
</div>
@endsection
