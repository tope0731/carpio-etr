
@include('libraries.styles')
@extends('layout')
@section('content')

<style>
    .containera {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group label {
        font-weight: bold;
    }
    .form-group input, .form-group select, .form-group button {
        margin-top: 5px;
    }
</style>
<div class="container">
    <div class="containera">
        <h1 class="mb-4">Search Admission Status</h1>
        <form id="searchForm" action="{{ route('admission.search') }}" method="GET">
            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="campus">Campus:</label>
                <select id="campus" name="campus" class="form-control">
                    <option value="" selected>Select Campus</option>
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
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Search">
            </div>
        </form>
    </div>
</div>

<!-- Include the rest of your form and sections -->

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
                        $secondChoice.empty();
                        $thirdChoice.empty();
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

