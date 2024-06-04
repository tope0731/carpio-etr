<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmissionInformation;
use Mail;
use App\Mail\NotifyApplicant;


class AdmissionController extends Controller
{

    protected $admission_information;
    protected $filter;
    public function __construct(){
        $this->admission_information = new AdmissionInformation();
        $this->filter = date('Y');
    }

    public function showForm()
{
    
    
}
    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    \Log::info('Request data:', $request->all());

    // Validate request data including file types
    $request->validate([
        // Your existing validation rules
        'grades' => 'required|file|mimes:jpeg,png,jpg|max:8192',
        'photo' => 'required|file|mimes:jpeg,png,jpg|max:8192',
        'campus' => 'required|string',
        'application_status' => 'nullable|string',
        'admission_status' => 'required|string',
        'first_choice' => 'required|string',
        'second_choice' => 'required|string',
        'third_choice' => 'required|string',
        // Add validation rules for other fields
        // Example:
        'student_name' => 'required|string',
        'address' => 'required|string',
        'contact_number' => 'required|string',
        'email' => 'required|email',
        'birth_date' => 'required|date',
        // Add validation rules for other fields
        // Example:
        'father_name' => 'required|string',
        'father_occupation' => 'required|string',
        'father_contact' => 'required|string',
        'mother_name' => 'required|string',
        'mother_occupation' => 'required|string',
        'mother_contact' => 'required|string',
        // Add validation rules for other fields
        // Example:
        'monthly_income' => 'required|string',
        'senior_high_school' => 'required|string',
        'shs_strand' => 'required|string',
        'year_graduated' => 'required|integer',
        'gen_average' => 'required|numeric',
        // Add validation rules for other fields
        // Example:
        'last_school_attended' => 'nullable|string',
        'course' => 'nullable|string',
        'last_school_year' => 'nullable|string',
        // Add validation rules for other fields
        // Example:
        'als_passer' => 'required|boolean',
        'als_year' => 'nullable|integer',
        'als_average' => 'nullable|numeric',
        '4ps' => 'required|boolean',
        '4ps_id' => 'nullable|string',
        'pwd' => 'required|boolean',
        'disability_type' => 'nullable|string',
        'ip' => 'required|boolean',
        'tribe' => 'nullable|string',
        'solo_parent' => 'required|boolean',
        'solo_parent_id' => 'nullable|string',
    ]);

    // Store uploaded images with original names
    $gradesPath = $request->file('grades')->storeAs('grades', $request->file('grades')->getClientOriginalName(), 'public');
    $photoPath = $request->file('photo')->storeAs('photos', $request->file('photo')->getClientOriginalName(), 'public');

    // Prepare data for storage
    $data = $request->except(['grades', 'photo']);
    $data['grades'] = $gradesPath;
    $data['photo'] = $photoPath;

    // Store admission information
    $admissionInformation = $this->admission_information->create($data);

    \Log::info('Stored admission information:', $admissionInformation->toArray());

    return redirect()->back()->with('success', 'Admission form submitted successfully.');
}

public function search(Request $request)
{
    $lastname = $request->input('lastname');
    $campus = $request->input('campus');

    \Log::info('Search criteria:', ['lastname' => $lastname, 'campus' => $campus]);

    $query = AdmissionInformation::query();

    if ($lastname) {
        $query->where('student_lname', 'like', '%' . $lastname . '%');
    }

    if ($campus) {
        $query->where('campus', $campus);
    }

    $results = $query->get();

    \Log::info('Search results:', $results->toArray());

    return view('search_results', ['results' => $results]);
}

    public function show($id)
    {
        $student = AdmissionInformation::findOrFail($id);
        return view('checkbday', ['student' => $student]);
    }

    public function showResult($id)
    {
        $student = AdmissionInformation::findOrFail($id);
        return view('show', compact('student'));
    }


    public function checkBirthday(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'bday' => 'required|date',
        ]);

        // Retrieve the user input
        $userInputBirthday = $request->input('bday');

        // Retrieve the student's birthdate from the database using the student ID
        $student = AdmissionInformation::findOrFail($id);
        $studentBirthDate = $student->birth_date;

        // Compare the user input birthdate with the student's birthdate
        if ($userInputBirthday === $studentBirthDate) {
            return redirect()->route('show', ['id' => $student->id]);
        } else {    
            return redirect()->back()->with('error', 'Invalid Birthdate.');
        }
    }

    //ADMIN START TODO:
    public function index()
    {
        $admissions = AdmissionInformation::all();
        return view('admin', ['admissions' => $admissions]);
    }

    public function filterYear(Request $request)
    {
        $this->filter = $request->input('filterYear');
        $admissions = AdmissionInformation::whereYear('created_at', $this->filter)->get();
        return view('admin', ['admissions' => $admissions, 'filter' => $this->filter]);
    }

    public function filterYearAccepted(Request $request)
    {
        $this->filter = $request->input('filterYear');
        $acceptedAdmissions = AdmissionInformation::whereYear('created_at', $this->filter)->get();
        return view('admin_accepted', ['acceptedAdmissions' => $acceptedAdmissions, 'filter' => $this->filter]);
    }

    public function filterYearRejected(Request $request)
    {
        $this->filter = $request->input('filterYear');
        $acceptedAdmissions = AdmissionInformation::whereYear('created_at', $this->filter)->get();
        return view('admin_rejected', ['acceptedAdmissions' => $acceptedAdmissions, 'filter' => $this->filter]);
    }

    public function filterYearWaitlisted(Request $request)
    {
        $this->filter = $request->input('filterYear');
        $acceptedAdmissions = AdmissionInformation::whereYear('created_at', $this->filter)->get();
        return view('admin_rejected', ['acceptedAdmissions' => $acceptedAdmissions, 'filter' => $this->filter]);
    }



    public function dashboard()
    {
        $totalAdmissions = AdmissionInformation::count();
        $totalAdmissionsAccepted = AdmissionInformation::where('application_status', 'accepted')->count();
        $totalAdmissionsRejected = AdmissionInformation::where('application_status', 'rejected')->count();
        $totalAdmissionsWaitlisted = AdmissionInformation::where('application_status', 'waitlist')->count();
        $totalAdmissionsNull = AdmissionInformation::whereNull('application_status')->count();

        $part = $totalAdmissions - $totalAdmissionsNull;

        $percentage = $totalAdmissions > 0 ? ($part/$totalAdmissions) * 100 : 0;
        return view('admin_dashboard', ['totalAdmissions' => $totalAdmissions, 'totalAdmissionsAccepted' => $totalAdmissionsAccepted,'totalAdmissionsRejected' => $totalAdmissionsRejected,'totalAdmissionsWaitlisted' => $totalAdmissionsWaitlisted,'totalAdmissionsNull' => $totalAdmissionsNull,'percentage' => $percentage, 'part' => $part,]);
    }

    public function filterYearDashboard(Request $request) {
        $this->filter = $request->input('filterYear');

    
        $totalAdmissions = AdmissionInformation::whereYear('created_at', $this->filter)->count();
        $totalAdmissionsAccepted = AdmissionInformation::where('application_status', 'accepted')
            ->whereYear('created_at', $this->filter)
            ->count();
        $totalAdmissionsRejected = AdmissionInformation::where('application_status', 'rejected')
            ->whereYear('created_at', $this->filter)
            ->count();
        $totalAdmissionsWaitlisted = AdmissionInformation::where('application_status', 'waitlist')
            ->whereYear('created_at', $this->filter)
            ->count();
        $totalAdmissionsNull = AdmissionInformation::whereNull('application_status')
            ->whereYear('created_at', $this->filter)
            ->count();
    
        $part = $totalAdmissions - $totalAdmissionsNull;
    
        $percentage = $totalAdmissions > 0 ? ($part/$totalAdmissions) * 100 : 0;
    
        $admissions = AdmissionInformation::whereYear('created_at', $this->filter)->get();
    
        return view('admin_dashboard', [
            'admissions' => $admissions,
            'part' => $part,
            'filter' => $this->filter, 
            'totalAdmissions' => $totalAdmissions,
            'totalAdmissionsAccepted' => $totalAdmissionsAccepted,
            'totalAdmissionsRejected' => $totalAdmissionsRejected,
            'totalAdmissionsWaitlisted' => $totalAdmissionsWaitlisted,
            'totalAdmissionsNull' => $totalAdmissionsNull,
            'percentage' => $percentage
        ]);
    }
    
    
    


    public function showAll($id)
    {
        $student = AdmissionInformation::findOrFail($id);
        return view('admin_see_details', ['student' => $student]);
    }

    

public function showAccepted()
{
    $acceptedAdmissions = AdmissionInformation::where('application_status', 'accepted')->get();
    // return view('admissions.accepted', compact('acceptedAdmissions'));
    return view('admin_accepted', ['acceptedAdmissions' => $acceptedAdmissions]);
}

//TODO: DITO ACCEPT
public function accept($id)
{
    $admission = AdmissionInformation::findOrFail($id);
    $admission->application_status = 'accepted';
    $admission->save();

    $subject = "Accepted";
    $body = 'We are happy to inform you the you are accepted to PSU';
    $email = $admission->email;

    Mail::to($email)->send(new NotifyApplicant($subject, $body));

    return redirect()->route('admissions.index')->with('success', 'Applicant accepted successfully.');
}

public function showRejected()
{
    $acceptedAdmissions = AdmissionInformation::where('application_status', 'rejected')->get();
    // return view('admissions.accepted', compact('acceptedAdmissions'));
    return view('admin_rejected', ['acceptedAdmissions' => $acceptedAdmissions]);
}

//TODO: DITO REJECT
public function reject($id)
{
    $admission = AdmissionInformation::findOrFail($id);
    $admission->application_status = 'rejected  ';
    $admission->save();


    $subject = "Rejected";
    $body = 'We are sorry to inform you the your application is rejected';
    $email = $admission->email;

    Mail::to($email)->send(new NotifyApplicant($subject, $body));

    return redirect()->route('admissions.index')->with('success', 'Applicant rejected successfully.');
}

public function showWaitlisted()
{
    $acceptedAdmissions = AdmissionInformation::where('application_status', 'waitlist')->get();
    // return view('admissions.accepted', compact('acceptedAdmissions'));
    return view('admin_waitlist', ['acceptedAdmissions' => $acceptedAdmissions]);
}

//TODO: DITO WAITLIST
public function waitlist($id)
{
    $admission = AdmissionInformation::findOrFail($id);
    $admission->application_status = 'waitlist';
    $admission->save();

    $subject = "Waitlisted";
    $body = 'We want to let you know that your application has been placed on our waitlist';
    $email = $admission->email;

    Mail::to($email)->send(new NotifyApplicant($subject, $body));

    return redirect()->route('admissions.index')->with('success', 'Applicant rejected successfully.');
}

public function pending()
{
    $admissions = AdmissionInformation::whereNull('application_status')->get();
    // return view('admissions.accepted', compact('acceptedAdmissions'));
    return view('admin_pending', ['admissions' => $admissions]);
}


}
