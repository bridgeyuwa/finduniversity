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
        $programs = Program::all();
        $colleges = College::all();
        $states = State::all();

        return view('institution.index', compact('institutions','programs','colleges','states'));
    }

    public function programs($id) {

        $institution = Institution::find($id);

        $programs = Program::all();
        $colleges = College::all();
        $states = State::all();

        return view('institution.programs', compact('institution', 'programs', 'colleges', 'states'));
    }

    public function bylocation() {

        $states = State::all();
        $regions = Region::all();
        $colleges = College::all();

        return view('institution.bylocation', compact('states', 'regions', 'colleges'));
    }

    public function byprogram() {

        $programs = Program::all();
        $colleges = College::all();
        $states = State::all();

        return view('institution.byprogram', compact('programs', 'colleges', 'states'));
    }

    public function show($id) {

        $institution = Institution::find($id);
        $programs = Program::all();
        $colleges = College::all();
        $states = State::all();

        return view('institution.show', compact('institution', 'programs', 'colleges', 'states'));
    }

}
