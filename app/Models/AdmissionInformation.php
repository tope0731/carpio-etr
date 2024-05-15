<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionInformation extends Model
{
    use HasFactory;

    protected $table = 'admission_information';
    protected $primaryKey = 'id';
    protected $fillable = [
        'campus',
        'admission_status',
        'application_status',
        'first_choice',
        'second_choice',
        'third_choice',
        'grades',
        'photo',
        'student_name',
        'student_mname',
        'student_lname',
        'birth_date',
        'address',
        'contact_number',
        'email',
        'father_name',
        'father_occupation',
        'father_contact',
        'mother_name',
        'mother_occupation',
        'mother_contact',
        'guardian_name',
        'guardian_contact',
        'guardian_address',
        'guardian_relationship',
        'monthly_income',
        'senior_high_school',
        'shs_strand',
        'year_graduated',
        'gen_average',
        'last_school_attended',
        'course',
        'last_school_year',
        'als_passer',
        'als_year',
        'als_average',
        '4ps',
        '4ps_id',
        'pwd',
        'disability_type',
        'ip',
        'tribe',
        'solo_parent',
        'solo_parent_id',

        
    ];
  
    

    use HasFactory;
}
