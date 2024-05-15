<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layout')
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
        color: #0323d9;
    }
    .section {
        margin-bottom: 20px;
        border-bottom: 2px solid #e4cb33;
        padding-bottom: 20px;
    }
    h2 {
        color: #e4cb33;
    }
    h3 {
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
    button[type="submit"] {
        background-color: #e4cb33;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    button[type="submit"]:hover {
        background-color: #d0b226;
    }
    /* File input style */
    input[type="file"] {
        border: none;
        padding: 8px 0;
    }
    /* Additional styles as needed */
</style>

<section class="section">
    <h2>Data Privacy Consent</h2>
    <ol>
        <li>By providing information to the Admission Office, I confirm that all data supplied and uploaded are true and correct. Providing false information will make me ineligible for admission, and PSU reserves the right to revise any decision based on the information provided if found untrue and incorrect.</li>
        <li>By applying for admission at PSU, I consent to the collection, use, and processing of my personal data for purposes related to my application for admission.</li>
        <li>My data will be accessed by the Admissions Office and other personnel involved in the evaluation process.</li>
        <li>I consent to the use of my data for policy formulation to improve the University's admission process.</li>
        <li>Copies of my application and documents will not be returned and will be disposed of if not accepted or if I decide not to pursue the application.</li>
        <li>My data will be submitted to relevant offices/agencies such as CHED and UniFAST for admission-related purposes.</li>
    </ol>
    <h3>Deadline of Application: May 17, 2024</h3>
</section>
<!-- TODO: -->
<form id="admissionForm" action="{{ route('admission.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<section class="section">
    <h3>Admission Information</h3>
    <label for="campus">Campus</label>
    <select id="campus" name="campus" required>
        <option value="">Select Campus</option>
        <option value="alaminos">Alaminos City Campus </option>
        <option value="asingan">Asingan Campus</option>
        <option value="bayambang">Bayambang Campus </option>
        <option value="binmaley">Binmaley Campus </option>
        <option value="infanta">Infanta Campus </option>
        <option value="lingayen">Lingayen Campus </option>
        <option value="san carlos">San Carlos City Campus </option>
        <option value="sta maria">Sta. Maria Campus </option>
        <option value="urdaneta">Urdaneta City Campus </option>
    </select>
    <label for="admission_status">Admission Status</label>
    <select id="admission_status" name="admission_status" required>
        <option value="first_year">First Year</option>
        <option value="transferee">Transferee</option>
        <option value="unit_taker">Unit Taker</option>
        <option value="second_course">2nd Course</option>
    </select>
    <label for="first_choice">First Choice Program</label>
    <select id="first_choice" name="first_choice" required>
        <option value="">Select First Choice Program</option>
    </select>
    <label for="second_choice">Second Choice Program</label>
    <select id="second_choice" name="second_choice" required>
        <option value="">Select Second Choice Program</option>
    </select>
    <label for="third_choice">Third Choice Program</label>
    <select id="third_choice" name="third_choice">
        <option value="">Select Third Choice Program</option>
    </select>
    <label for="grades">Copy of Grades</label>
    <input type="file" id="grades" name="grades" accept="image/*" required>
    <p>Note: Only upload images with filesize less than 8MB.</p>
    <label for="photo">2x2 Photo</label>
    <input type="file" id="photo" name="photo" accept="image/*" required>
    <p>Note: Upload image lower than 8MB.</p>
</section>
<section class="section">
    <h3>Personal Information</h3>
    <label for="student_name">Student Name</label>
    <input type="text" id="student_name" name="student_name" required>
    <label for="student_name">Student Middle Name</label>
    <input type="text" id="student_mname" name="student_mname" required>
    <label for="student_name">Student Last Name</label>
    <input type="text" id="student_lname" name="student_lname" required>
    <label for="birth_date">Date of Birth</label>
    <input type="date" id="birth_date" name="birth_date" required>
    <label for="address">Complete Address</label>
    <input type="text" id="address" name="address" required>
    <label for="contact_number">Contact Number</label>
    <input type="tel" id="contact_number" name="contact_number" required>
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required>
</section>
<section class="section">
    <h3>Parent and Guardian's Information</h3>
    
    <label for="father_name">Father's Name</label>
    <input type="text" id="father_name" name="father_name" required>
    
    <label for="father_occupation">Father's Occupation</label>
    <input type="text" id="father_occupation" name="father_occupation" required>
    
    <label for="father_contact">Father's Contact No.</label>
    <input type="text" id="father_contact" name="father_contact" required>
    
    <label for="mother_name">Mother's Name</label>
    <input type="text" id="mother_name" name="mother_name" required>
    
    <label for="mother_occupation">Mother's Occupation</label>
    <input type="text" id="mother_occupation" name="mother_occupation" required>
    
    <label for="mother_contact">Mother's Contact No.</label>
    <input type="text" id="mother_contact" name="mother_contact" required>
    
    <label for="guardian_name">Guardian's Name</label>
    <input type="text" id="guardian_name" name="guardian_name" required>
    
    <label for="guardian_contact">Guardian's Contact No.</label>
    <input type="text" id="guardian_contact" name="guardian_contact" required>
    
    <label for="guardian_address">Guardian's Address</label>
    <input type="text" id="guardian_address" name="guardian_address" required>
    
    <label for="guardian_relationship">Relationship to Guardian</label>
    <input type="text" id="guardian_relationship" name="guardian_relationship" required>
    
    <label for="monthly_income">Monthly Income</label>
    <select id="monthly_income" name="monthly_income" required>
        <option value="10000_below">10,000 and below</option>
        <option value="10001_20000">10,001 - 20,000</option>
        <option value="20001_40000">20,001 - 40,000</option>
        <option value="40001_75000">40,001 - 75,000</option>
        <option value="75001_130000">75,001 - 130,000</option>
        <option value="130001_200000">130,001 - 200,000</option>
        <option value="200000_above">Above 200,000</option>
    </select>
</section>

<section class="section">
    <h3>Educational Information</h3>
    
    <label for="senior_high_school">Senior High School</label>
    <input type="text" id="senior_high_school" name="senior_high_school">
    
    <label for="shs_strand">SHS Strand</label>
    <select id="shs_strand" name="shs_strand">
        <option value="GAS">General Academic Strand</option>
        <option value="HUMSS">Humanities and Social Sciences</option>
        <option value="STEM">Science, Technology, Engineering and Math</option>
        <option value="ABM">Accountancy, Business and Management</option>
        <option value="Agri-Fishery">Agri-Fishery</option>
        <option value="Home Economics">Home Economics</option>
        <option value="Industrial Arts">Industrial Arts (Garments, Automotive, Welding etc)</option>
        <option value="ICT">Information and Communication Technology</option>
        <option value="Others">Others</option>
    </select>
    
    <label for="year_graduated">Year Graduated</label>
    <input type="number" id="year_graduated" name="year_graduated">
    
    <label for="gen_average">General Average</label>
    <input type="number" step="0.01" id="gen_average" name="gen_average">
    
    <h4>For Transferee / Tech-Voc Course Graduate / 2nd Course</h4>
    
    <label for="last_school_attended">Last School Attended</label>
    <input type="text" id="last_school_attended" name="last_school_attended">
    
    <label for="course">Course</label>
    <input type="text" id="course" name="course">
    
    <label for="last_school_year">Last School Year</label>
    <input type="text" id="last_school_year" name="last_school_year">
</section>

<section class="section">
    <h3>Other Information</h3>

    <label for="als_passer">Is the Student an Alternative Learning System (ALS) Passer?</label>
    <select id="als_passer" name="als_passer">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
    <label for="als_year">Year Taken (ALS)</label>
    <input type="number" id="als_year" name="als_year">
    <label for="als_average">Average (ALS)</label>
    <input type="number" step="0.01" id="als_average" name="als_average">

    <label for="4ps">Is the Student's family a 4Ps Beneficiary?</label>
    <select id="4ps" name="4ps">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
    <label for="4ps_id">4Ps ID#</label>
    <input type="text" id="4ps_id" name="4ps_id">

    <label for="pwd">Does the Student have any form of disability or classified as PWD?</label>
    <select id="pwd" name="pwd">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
    <label for="disability_type">Type of Disability</label>
    <select id="disability_type" name="disability_type">
        <option value="">Select One</option>
        <option value="deafness">Deafness</option>
        <option value="partial_deafness">Partial Deafness</option>
        <option value="oral_defect">Oral Defect</option>
        <option value="orthopedic_disability">Orthopedic Disability</option>
        <option value="loss_of_leg">Loss of one or both legs/feet</option>
        <option value="physical_blindness">Physical Blindness</option>
        <option value="low_vision">Low Vision</option>
        <option value="hearing_impairment">Hearing Impairment</option>
        <option value="loss_of_arm">Loss of one or both arms/hands</option>
        <option value="multiple_impairment">Multiple Impairment</option>
        <option value="others">Others</option>
    </select>

    <label for="ip">Is the Student a member of any Indigenous Peoples (IP) group?</label>
    <select id="ip" name="ip">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
    <label for="tribe">Tribe/Ethnic Group</label>
    <input type="text" id="tribe" name="tribe">

    <label for="solo_parent">Is the Student a solo parent?</label>
    <select id="solo_parent" name="solo_parent">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
    <label for="solo_parent_id">Solo Parent ID</label>
    <input type="text" id="solo_parent_id" name="solo_parent_id">
</section>

<button type="submit">Submit</button>
</form> 
<!-- TODO: -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#campus').change(function() {
        var selectedCampus = $(this).val();
        if (selectedCampus !== '') {
            $.ajax({
                type: 'POST',
                url: '{{ route('getPrograms') }}',
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: { campus: selectedCampus },
                success: function(data) {
                    var $firstChoice = $('#first_choice');
                    var $secondChoice = $('#second_choice');
                    var $thirdChoice = $('#third_choice');
                    $firstChoice.empty();
                    if (data.programs && data.programs.length > 0) {
                        $.each(data.programs, function(index, program) {
                            $firstChoice.append('<option value="'+program.id+'">'+program.name+'</option>');
                            $secondChoice.append('<option value="'+program.id+'">'+program.name+'</option>');
                            $thirdChoice.append('<option value="'+program.id+'">'+program.name+'</option>');    
                        });
                    } else {
                        $firstChoice.append('<option value="">No programs available</option>');
                        $secondChoice.append('<option value="">No programs available</option>');
                        $thirdChoice.append('<option value="">No programs available</option>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX request failed:', error);
                    $('#first_choice').empty().append('<option value="">Error loading programs</option>');
                    $('#second_choice').empty().append('<option value="">Error loading programs</option>');
                    $('#third_choice').empty().append('<option value="">Error loading programs</option>');
                }
            });
        } else {
            $('#first_choice').empty().append('<option value="">Select First Choice Program</option>');
            $('#second_choice').empty().append('<option value="">Select Second Choice Program</option>');
            $('#third_choice').empty().append('<option value="">Select Third Choice Program</option>');
        }
    });

    $('#admissionForm').submit(function(e) {
        if ($('#campus').val() === '') {
            alert('Please select a campus.');
            e.preventDefault();
        }
    });
});



</script>
          
@endsection
