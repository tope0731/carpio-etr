

@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Applicant Details</h1>
    
    <!-- Admission Information Table -->
    <div class="card mt-4">
        <div class="card-header">
            <h2>Admission Information</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Campus</th>
                    <td>{{ $student->campus }}</td>
                </tr>
                <tr>
                    <th>First Choice</th>
                    <td>{{ $student->first_choice }}</td>
                </tr>
                <tr>
                    <th>Second Choice</th>
                    <td>{{ $student->second_choice }}</td>
                </tr>
                <tr>
                    <th>Third Choice</th>
                    <td>{{ $student->third_choice }}</td>
                </tr>
                <tr>
                    <th>Admission Status</th>
                    <td>{{ $student->admission_status }}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Personal Information Table -->
    <div class="card mt-4">
        <div class="card-header">
            <h2>Personal Information</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Full Name</th>
                    <td>{{ $student->student_name }} {{ $student->student_mname }} {{ $student->student_lname }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $student->address }}</td>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <td>{{ $student->contact_number }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $student->email }}</td>
                </tr>
                <tr>
                    <th>Birth Date</th>
                    <td>{{ $student->birth_date }}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Parents and Guardian Information Table -->
    <div class="card mt-4">
        <div class="card-header">
            <h2>Parents and Guardian Information</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Father's Name</th>
                    <td>{{ $student->father_name }}</td>
                </tr>
                <tr>
                    <th>Father's Occupation</th>
                    <td>{{ $student->father_occupation }}</td>
                </tr>
                <tr>
                    <th>Father's Contact</th>
                    <td>{{ $student->father_contact }}</td>
                </tr>
                <tr>
                    <th>Mother's Name</th>
                    <td>{{ $student->mother_name }}</td>
                </tr>
                <tr>
                    <th>Mother's Occupation</th>
                    <td>{{ $student->mother_occupation }}</td>
                </tr>
                <tr>
                    <th>Mother's Contact</th>
                    <td>{{ $student->mother_contact }}</td>
                </tr>
                <tr>
                    <th>Monthly Income</th>
                    <td>{{ $student->monthly_income }}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Educational Information Table -->
    <div class="card mt-4">
        <div class="card-header">
            <h2>Educational Information</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Senior High School</th>
                    <td>{{ $student->senior_high_school }}</td>
                </tr>
                <tr>
                    <th>SHS Strand</th>
                    <td>{{ $student->shs_strand }}</td>
                </tr>
                <tr>
                    <th>Year Graduated</th>
                    <td>{{ $student->year_graduated }}</td>
                </tr>
                <tr>
                    <th>General Average</th>
                    <td>{{ $student->gen_average }}</td>
                </tr>
                <tr>
                    <th>Last School Attended</th>
                    <td>{{ $student->last_school_attended }}</td>
                </tr>
                <tr>
                    <th>Course</th>
                    <td>{{ $student->course }}</td>
                </tr>
                <tr>
                    <th>Last School Year</th>
                    <td>{{ $student->last_school_year }}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Other Information Table -->
    <div class="card mt-4">
        <div class="card-header">
            <h2>Other Information</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>ALS Passer</th>
                    <td>{{ $student->als_passer ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>ALS Year</th>
                    <td>{{ $student->als_year }}</td>
                </tr>
                <tr>
                    <th>ALS Average</th>
                    <td>{{ $student->als_average }}</td>
                </tr>
                <tr>
                    <th>4Ps Member</th>
                    <td>{{ $student->four_ps ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>4Ps ID</th>
                    <td>{{ $student->four_ps_id }}</td>
                </tr>
                <tr>
                    <th>PWD</th>
                    <td>{{ $student->pwd ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Disability Type</th>
                    <td>{{ $student->disability_type }}</td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>{{ $student->ip ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Tribe</th>
                    <td>{{ $student->tribe }}</td>
                </tr>
                <tr>
                    <th>Solo Parent</th>
                    <td>{{ $student->solo_parent ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Solo Parent ID</th>
                    <td>{{ $student->solo_parent_id }}</td>
                </tr>
            </table>
        </div>  
    </div>

    <a href="{{ route('admissions.index') }}" class="btn btn-secondary mt-3">Back All Applicants</a>
</div>
@endsection
