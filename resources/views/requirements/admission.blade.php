    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('libraries.styles')
    @extends('layout')
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
        button[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
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

    </style>
    <div class="container">
    <section class="section">
    <!-- TODO:Data privacy -->
        <div class="content-data">
            <h1>Data Privacy Consent!!!</h1>
            <ol>
                <li>By providing information to the Admission Office, I confirm that all data supplied and uploaded are true and correct. Providing false information will make me ineligible for admission, and PSU reserves the right to revise any decision based on the information provided if found untrue and incorrect.</li>
                <li>By applying for admission at PSU, I consent to the collection, use, and processing of my personal data for purposes related to my application for admission.</li>
                <li>My data will be accessed by the Admissions Office and other personnel involved in the evaluation process.</li>
                <li>I consent to the use of my data for policy formulation to improve the University's admission process.</li>
                <li>Copies of my application and documents will not be returned and will be disposed of if not accepted or if I decide not to pursue the application.</li>
                <li>My data will be submitted to relevant offices/agencies such as CHED and UniFAST for admission-related purposes.</li>
            </ol>
        </div>
        <br><br>
        <h3 style="color: red;">Deadline of Application: May 17, 2025</h3>
    </section>
    <!-- TODO: -->
    <form id="admissionForm" action="{{ route('admission.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div  class="content-data2">
        <section class="section">
            <h2>Admission Information <i class="required-message">**All fields here are required</i> </h2><br>
            
            <div class="form-row">
                <label for="campus">Campus</label>
                <label for="admission_status">Admission Status</label>
            </div>
            <div class="form-row">
                        <select id="campus" name="campus" required>
                            <option value="">Select Campus</option>
                            <option value="alaminos">Alaminos City Campus</option>
                            <option value="asingan">Asingan Campus</option>
                            <option value="bayambang">Bayambang Campus</option>
                            <option value="binmaley">Binmaley Campus</option>
                            <option value="infanta">Infanta Campus</option>
                            <option value="lingayen">Lingayen Campus</option>
                            <option value="san carlos">San Carlos City Campus</option>
                            <option value="sta maria">Sta. Maria Campus</option>
                            <option value="urdaneta">Urdaneta City Campus</option>
                        </select>
                        <select id="admission_status" name="admission_status" required>
                            <option value="first_year">First Year</option>
                            <option value="transferee">Transferee</option>
                            <option value="unit_taker">Unit Taker</option>
                            <option value="second_course">2nd Course</option>
                        </select>
            </div>

            <div class="form-row2">
                <label for="first_choice">First Choice Program</label>
                <label for="second_choice">Second Choice Program</label>
                <label for="third_choice">Third Choice Program</label>
            </div>
            <div class="form-row2">
                <select id="first_choice" name="first_choice" required>
                    <option value="">Select First Choice Program</option>
                </select>
            
                <select id="second_choice" name="second_choice" required>
                    <option value="">Select Second Choice Program</option>
                </select>
                
                <select id="third_choice" name="third_choice">
                    <option value="">Select Third Choice Program</option>
                </select>
            </div><br>

            <div class="form-row3">
            <label for="grades">Copy of Grades</label>
            <label for="photo">2x2 Photo</label>
            </div>
            <div class="form-row3">
                <input type="file" id="photo" name="photo" accept="image/*" required><br>
                <input type="file" id="grades" name="grades" accept="image/*" required><br>
            </div>
            <!-- Copy of Grades and 2x2 Photo file inputs -->
            
            <!-- Note about image upload -->
            <div class="form-row3">
                <p class="note">Note: Upload images lower than 8MB.</p>
                <p class="note">Note: Only upload images with filesize less than 8MB.</p>
            </div>
          

        </section>
    </div>
    <br>
    <div class="content-data2">
        <section class="section">
            <h2>Personal Information <i class="required-message">**All fields here are required</i> </h2><br>
            <div class="form-row2">
                <label for="student_name">Student First Name</label>
                <label for="student_name">Student Middle Name</label>
                <label for="student_name">Student Last Name</label>
            </div>
            <div class="form-row2">
                <input type="text" id="student_name" name="student_name" required>
                <input type="text" id="student_mname" name="student_mname" required>
                <input type="text" id="student_lname" name="student_lname" required>
            </div>

            <label for="address">Complete Address</label>
            <input type="text" id="address" name="address" required>
            
            <div class="form-row2">
                <label for="birth_date">Date of Birth</label>
                <label for="contact_number">Contact Number</label>
                <label for="email">Email Address</label>
            </div>

            <div class="form-row2">
                <input type="date" id="birth_date" name="birth_date" required>
                <input type="tel" id="contact_number" name="contact_number" required>
                <input type="email" id="email" name="email" required>
            </div>
        </section>
    </div>
    <br>
    <div class="content-data2">
        <section class="section">
            <h2>Parent and Guardian's Information <i class="required-message">**All fields here are required | Write N/A if not applicable</i> </h2><br>

            <div class="form-row2">
                <label for="father_name">Father's Name</label>
                <label for="father_occupation">Father's Occupation</label>
                <label for="father_contact">Father's Contact No.</label>
            </div>
            <div class="form-row2">
                <input type="text" id="father_name" name="father_name" required>
                <input type="text" id="father_occupation" name="father_occupation" required>
                <input type="text" id="father_contact" name="father_contact" required>
            </div>

            <div class="form-row2">
                <label for="mother_name">Mother's Name</label>
                <label for="mother_occupation">Mother's Occupation</label>
                <label for="mother_contact">Mother's Contact No.</label>
            </div>
            
            <div class="form-row2">
                <input type="text" id="mother_name" name="mother_name" required>
                <input type="text" id="mother_occupation" name="mother_occupation" required>
                <input type="text" id="mother_contact" name="mother_contact" required>
            </div>
            
            <div class="form-row4">
                <label for="guardian_name">Guardian's Name</label>
                <label for="guardian_contact">Guardian's Contact No.</label>
                <label for="guardian_address">Guardian's Address</label>
                <label for="guardian_relationship">Relationship to Guardian</label>
            </div>
            
            <div class="form-row4">
                <input type="text" id="guardian_name" name="guardian_name" required>
                <input type="text" id="guardian_contact" name="guardian_contact" required>
                <input type="text" id="guardian_address" name="guardian_address" required>
                <input type="text" id="guardian_relationship" name="guardian_relationship" required>
            </div>
            <br>
            
            <label for="monthly_income">Household Monthly Income</label>
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
    </div>
    <br>
    <div class="content-data2">
        <section class="section">
            <h2>Educational Information <i class="required-message">**All fields here are required | Write N/A if not applicable</i></h2><br>
          
            <label for="senior_high_school">Senior High School</label>
            <input type="text" id="senior_high_school" name="senior_high_school">
                
            <div class="form-row5">
                <label for="shs_strand">SHS Strand</label>
                <label for="year_graduated">Year Graduated</label>
                <label for="gen_average">General Average</label>
            </div>
            <div class="form-row5">
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
                <input type="number" id="year_graduated" name="year_graduated">
                <input type="number" step="0.01" id="gen_average" name="gen_average">

            </div>
            <br>

            <h4>For Transferee / Tech-Voc Course Graduate / 2nd Course</h4>

            <label for="last_school_attended">Last School Attended</label>
            <input type="text" id="last_school_attended" name="last_school_attended">

            <div class="form-row3">
                <label for="course">Course</label>
                <label for="last_school_year"> &nbsp;&nbsp;&nbsp;Last School Year</label>
            </div>
                
            <div class="form-row3">
                <input type="text" id="course" name="course">
                <input type="text" id="last_school_year" name="last_school_year">
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
                <select id="als_passer" name="als_passer">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                <input type="number" id="als_year" name="als_year">
                <input type="number" step="0.01" id="als_average" name="als_average">
            </div>
            
            
            <div class="form-row">
                <label for="4ps">Is the Student's family a 4Ps Beneficiary?</label>
                <label for="4ps_id">4Ps ID#</label>
            </div>
            <div class="form-row">
                <select id="4ps" name="4ps">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                <input type="text" id="4ps_id" name="4ps_id">
            </div>

            <div class="form-row">
                <label for="pwd">Does the Student have any form of disability or classified as PWD?</label>
                <label for="disability_type">Type of Disability</label>
            </div>

            <div class="form-row">
                <select id="pwd" name="pwd">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
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
            </div>

            <div class="form-row">
                <label for="ip">Is the Student a member of any Indigenous Peoples (IP) group?</label>
                <label for="tribe">Tribe/Ethnic Group</label>
            </div>

            <div class="form-row">
                <select id="ip" name="ip">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            
                <input type="text" id="tribe" name="tribe">
            </div>
           
            <div class="form-row">
                <label for="solo_parent">Is the Student a solo parent?</label>
                <label for="solo_parent_id">Solo Parent ID</label>
            </div>
            
            <div class="form-row">
                <select id="solo_parent" name="solo_parent">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                
                <input type="text" id="solo_parent_id" name="solo_parent_id">
            </div>
        </section>
    </div>
    <br>
    <button type="submit" style="display: block; margin: 0 auto; width: 200px;">Submit Application</button>
    </form> 
    </div>
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
                                $firstChoice.append('<option value="'+program.name+'">'+program.name+'</option>');
                                $secondChoice.append('<option value="'+program.name+'">'+program.name+'</option>');
                                $thirdChoice.append('<option value="'+program.name+'">'+program.name+'</option>');    
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
