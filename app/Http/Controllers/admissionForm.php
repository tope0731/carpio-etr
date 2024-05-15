<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admissionForm extends Controller
{
    public function getPrograms(Request $request)
    {
        $campus = $request->input('campus');
        $programs = Program::where('campus', $campus)->get(['id', 'name']);
        return response()->json(['programs' => $programs]);
    }
}
