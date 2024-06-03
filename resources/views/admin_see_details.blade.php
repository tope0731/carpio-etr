@include('libraries.styles')
@extends('admin_layout')

@section('content')
<style>
        .section {
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        h1 {
            color: #e4cb33;
        }
        h2 {
            color: #0323d9;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #0323d9;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .content-data {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content-data2 {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    .form-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 0;
    }

    .form-row label {
        width: 48%;
        text-align: left;
    }
    .form-row input {
        width: 48%;
        text-align: left;
    }

    .form-row select {
        width: 48%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }
    /* 2 */

    .form-row2 {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 0;
    }

    .form-row2 label {
        width: 30%;
        text-align: left;
    }

    .form-row2 input {
        width: 30%;
        text-align: left;
    }


    .form-row2 select {
        width: 30%; 
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .required-message {
                font-size: 14px; /* Adjust the font size as needed */
                color: red; /* Change to the desired color */
                font-style: italic; /* Ensure the text is italic */
                display: block; /* Makes sure it takes up the full width */
                margin-top: 10px; /* Optional: Add some margin on top for spacing */
    }

    label{
        color: black;
    }
    .form-section {
        background-color: #f0f0f0; /* Light background for the section */
        padding: 20px; /* Padding around the section */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
        margin-bottom: 20px; /* Space below the section */
    }

    .form-row3 {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 0;
    }

    .form-row3 label {
            width: 49%;
            text-align: left;
    }


    .form-row3 input {
        width: 48%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    


    .note {
        width: 49%;
        font-size: 12px; /* Font size for notes */
        color: #666; /* Gray color for notes */
        margin-top: 1px; /* Negative margin to bring closer to input */
        margin-bottom: 20px;
    }
    /* 4 */

    .form-row4 {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 0;
    }

    .form-row4 label {
        width: 23%;
        text-align: left;
    }

    .form-row4 input {
        width: 23%;
        text-align: left;
    }

    .form-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 0;
    }

    .form-row label {
        width: 48%;
        text-align: left;
    }
    .form-row input {
        width: 48%;
        text-align: left;
    }

    .form-row select {
        width: 48%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    /* 5 */
    .form-row5 {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 0;
    }

    .form-row5 label {
        width: 30%;
        text-align: left;
    }
    .form-row5 input {
        width: 30%;
        text-align: left;
    }
    .form-row5 select {
        width: 30%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }
    

    .top {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 0 auto;
            width: 200px;
            text-align: center;
            text-decoration: none;
        }

    </style>
<div class="container">
    <div  class="content-data2">
        <section class="section">
            <h2>Admission Information </h2><br>
            
            <div class="form-row">
                <label for="campus">Campus</label>
                <label for="admission_status">Admission Status</label>
            </div>
            <div class="form-row">
                        <input type="text" id="student_name" name="student_name" value="{{ $student->campus}}" readonly>
                        <input type="text" id="student_name" name="student_name" value="{{ $student->admission_status}}" readonly>
            </div>

            <div class="form-row2">
                <label for="first_choice">First Choice Program</label>
                <label for="second_choice">Second Choice Program</label>
                <label for="third_choice">Third Choice Program</label>
            </div>
            <div class="form-row2">
                <input type="text" value="{{ $student->first_choice}}" readonly>
            
                <input type="text" value="{{ $student->second_choice}}" readonly>
                
                <input type="text" value="{{ $student->third_choice}}" readonly>
            </div><br>

            <div class="form-row3">
            <label for="grades">Copy of Grades</label>
            <label for="photo">2x2 Photo</label>
            </div>
            <div class="form-row3">
                <img src="{{ asset('storage/' . $student->photo) }}" width="400px" height="400px" alt="Student Photo">
                <img src="{{ asset('storage/' . $student->grades) }}" width="400px" height="400px" alt="Student Photo">
                <br>
            </div>
            <!-- Copy of Grades and 2x2 Photo file inputs -->
            
            <!-- Note about image upload -->
           
          

        </section>
    </div>
    <br>
    <div class="content-data2">
        <section class="section">
            <h2>Personal Information</h2><br>
            <div class="form-row2">
                <label for="student_name">Student First Name</label>
                <label for="student_name">Student Middle Name</label>
                <label for="student_name">Student Last Name</label>
            </div>
            <div class="form-row2">
                <input type="text" value="{{ $student->student_name}}" readonly>
                <input type="text" value="{{ $student->student_mname}}" readonly>
                <input type="text" value="{{ $student->student_lname}}" readonly>
            </div>

            <label for="address">Complete Address</label>
            <input type="text" value="{{ $student->address}}" readonly>
            
            <div class="form-row2">
                <label for="birth_date">Date of Birth</label>
                <label for="contact_number">Contact Number</label>
                <label for="email">Email Address</label>
            </div>

            <div class="form-row2">
                <input type="text" value="{{ $student->birth_date}}" readonly>
                <input type="text" value="{{ $student->contact_number}}" readonly>
                <input type="text" value="{{ $student->email}}" readonly>
            </div>
        </section>
    </div>
    <br>
    <div class="content-data2">
        <section class="section">
            <h2>Parent and Guardian's Information  </h2><br>

            <div class="form-row2">
                <label for="father_name">Father's Name</label>
                <label for="father_occupation">Father's Occupation</label>
                <label for="father_contact">Father's Contact No.</label>
            </div>
            <div class="form-row2">
                <input type="text" value="{{ $student->father_name}}" readonly>
                <input type="text" value="{{ $student->father_occupation}}" readonly>
                <input type="text" value="{{ $student->father_contact}}" readonly>
            </div>

            <div class="form-row2">
                <label for="mother_name">Mother's Name</label>
                <label for="mother_occupation">Mother's Occupation</label>
                <label for="mother_contact">Mother's Contact No.</label>
            </div>
            
            <div class="form-row2">
                <input type="text" value="{{ $student->mother_name}}" readonly>
                <input type="text" value="{{ $student->mother_occupation}}" readonly>
                <input type="text" value="{{ $student->mother_contact}}" readonly>
            </div>
            
            <div class="form-row4">
                <label for="guardian_name">Guardian's Name</label>
                <label for="guardian_contact">Guardian's Contact No.</label>
                <label for="guardian_address">Guardian's Address</label>
                <label for="guardian_relationship">Relationship to Guardian</label>
            </div>
            
            <div class="form-row4">
                <input type="text" value="{{ $student->guardian_name}}" readonly>
                <input type="text" value="{{ $student->guardian_contact}}" readonly>
                <input type="text" value="{{ $student->guardian_address}}" readonly>
                <input type="text" value="{{ $student->guardian_relationship}}" readonly>
            </div>
            <br>
            
            <label for="monthly_income">Household Monthly Income</label>
            <input type="text" value="{{ $student->monthly_income}}" readonly>
        </section>
    </div>
    <br>
    <div class="content-data2">
        <section class="section">
            <h2>Educational Information</h2><br>
          
            <label for="senior_high_school">Senior High School</label>
            <input type="text" value="{{ $student->senior_high_school}}" readonly>
                
            <div class="form-row5">
                <label for="shs_strand">SHS Strand</label>
                <label for="year_graduated">Year Graduated</label>
                <label for="gen_average">General Average</label>
            </div>
            <div class="form-row5">
                <input type="text" value="{{ $student->shs_strand}}" readonly>
                <input type="text" value="{{ $student->year_graduated}}" readonly>
                <input type="text" value="{{ $student->gen_average}}" readonly>

            </div>
            <br>

            <h4>For Transferee / Tech-Voc Course Graduate / 2nd Course</h4>

            <label for="last_school_attended">Last School Attended</label>
            <input type="text" value="{{ $student->last_year_attended}}" readonly>

            <div class="form-row3">
                <label for="course">Course</label>
                <label for="last_school_year"> &nbsp;&nbsp;&nbsp;Last School Year</label>
            </div>
                
            <div class="form-row3">
                <input type="text" value="{{ $student->course}}" readonly>
                <input type="text" value="{{ $student->last_school_year}}" readonly>
            </div>
            
        </section>
    </div>
    <div class="content-data2">
        <section class="section">
            <h2>Other Information</h2>

            <div class="form-row2">
                <label for="als_passer">Is the Student an Alternative Learning System (ALS) Passer?</label>
                <label for="als_year">Year Taken (ALS)</label>
                <label for="als_average">Average (ALS)</label>
            </div>


            <div class="form-row2">
            <input type="text" value="{{ $student->als_passer}}" readonly>
            <input type="text" value="{{ $student->als_year}}" readonly>
            <input type="text" value="{{ $student->als_average}}" readonly>
            </div>
            
            
            <div class="form-row">
                <label for="4ps">Is the Student's family a 4Ps Beneficiary?</label>
                <label for="4ps_id">4Ps ID#</label>
            </div>
            <div class="form-row">
                <input type="text" value="{{ $student['4ps'] }}" readonly>
                <input type="text" value="{{ $student['4ps_id'] }}" readonly>

            </div>

            <div class="form-row">
                <label for="pwd">Does the Student have any form of disability or classified as PWD?</label>
                <label for="disability_type">Type of Disability</label>
            </div>

            <div class="form-row">
            <input type="text" value="{{ $student->pwd}}" readonly>
            <input type="text" value="{{ $student->disability_type}}" readonly>
            </div>

            <div class="form-row">
                <label for="ip">Is the Student a member of any Indigenous Peoples (IP) group?</label>
                <label for="tribe">Tribe/Ethnic Group</label>
            </div>

            <div class="form-row">
                <input type="text" value="{{ $student->ip}}" readonly>
                <input type="text" value="{{ $student->tribe}}" readonly>
            </div>
           
            <div class="form-row">
                <label for="solo_parent">Is the Student a solo parent?</label>
                <label for="solo_parent_id">Solo Parent ID</label>
            </div>
            
            <div class="form-row">
                <input type="text" value="{{ $student->solo_parent}}" readonly>
                <input type="text" value="{{ $student->solo_parent_id}}" readonly>
            </div>
        </section>
    </div><br>
    <a href="#" class="top">Back to top</a><br>
    
    </div>
@endsection