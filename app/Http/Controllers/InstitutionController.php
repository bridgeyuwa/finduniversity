<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\State;
use App\Models\Region;
use App\Models\Program;
use App\Models\College;

class InstitutionController extends Controller {

    public function index() {



        $institutions = Institution::all();
        
    
        return view('institution.index', compact('institutions'));
    }

    public function programs($id) {

        $institution = Institution::find($id);



        return view('institution.programs', compact('institution'));
    }

    public function bylocation() {

        $states = State::all();
        $regions = Region::all();

        return view('institution.bylocation', compact('states', 'regions'));
    }

    public function byprogram() {

        $programs = Program::all();
        $colleges = college::all();

        return view('institution.byprogram', compact('programs','colleges'));
    }

    public function show($id) {

        $institution = Institution::find($id);

        return view('institution.show', compact('institution'));
    }

}
