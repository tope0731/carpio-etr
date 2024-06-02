<!-- resources/views/admin/admissions/index.blade.php -->

@extends('admin_layout')

@section('content')
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Applicants</h1>
                </div>

<div class="container mt-5">

    @if($admissions->isEmpty())
        <div class="alert alert-info mt-3" role="alert">
            No admissions found.
        </div>
    @else
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Student Name</th>
                    <th scope="col">Campus</th>
                    <th scope="col">Admission Status</th>
                    <th scope="col">First Choice</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admissions as $admission)
                    <tr>
                        <td>{{ $admission->student_name }} {{ $admission->student_mname }} {{ $admission->student_lname }}</td>
                        <td>{{ $admission->campus }}</td>
                        <td>{{ $admission->admission_status }}</td>
                        <td>{{ $admission->first_choice }}</td>
                        <td>
                            <a href="{{ route('admission.showAll', $admission->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Details
                            </a>
                            <form action="{{ route('admission.accept', $admission->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Accept
                                </button>
                            </form>
                            
                            <form action="{{ route('admission.waitlist', $admission->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Waitlist
                                </button>
                            </form>
                            <form action="{{ route('admission.reject', $admission->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Reject
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
