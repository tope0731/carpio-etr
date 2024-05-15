<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class RequirementsController extends Controller
{
    // protected $requirement;
    // public function __construct(){
    //     $this->requirement = new Category();
        
    // }
    //
    public function index()
    {
        // $response['requirements'] = $this->requirement->all();
        return view('requirements.index');
    }

    public function admission()
    {
        // $response['requirements'] = $this->requirement->all();
        return view('requirements.admission');
    }
    public function application()
    {
        return view('requirements.application');
    }

    public function contact()
    {
        // $response['requirements'] = $this->requirement->all();
        return view('contact_us');
    }
    public function selection()
    {
        // $response['requirements'] = $this->requirement->all();
        return view('selection_process');
    }
    public function getPrograms(Request $request)
    {
        $campus = $request->input('campus');
        $programs = Program::where('campus', $campus)->get(['id', 'name']);
        return response()->json(['programs' => $programs]);
    }
    
}
