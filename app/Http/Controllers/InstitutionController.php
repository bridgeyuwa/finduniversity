<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\State;
use App\Models\Region;
use App\Models\Program;

class InstitutionController extends Controller {

    public function index() {



        $institutions = Institution::all();
        
      /*  foreach($institutions as $institution){
        echo "$institution->id</br>";
        }
       * 
       */
        $i = 1;

 $i_name = "";
        return view('institution.index', compact('institutions', 'i','i_name'));
    }

    public function universities() {



        $institutions = Institution::where('category_id', 1)->get();

        $i_name = "universities";

        return view('institution.index', compact('institutions', 'i_name'));
    }

    public function polytechnics() {



        $institutions = Institution::where('category_id', 2)->get();


        $i_name = "polytechnics";

        return view('institution.index', compact('institutions','i_name'));
    }

    public function monotechnics() {



        $institutions = Institution::where('category_id', 3)->get();


        $i_name = "monotechnics";


        return view('institution.index', compact('institutions', 'i_name'));
    }

    public function collegesofeduction() {



        $institutions = Institution::where('category_id', 4)->get();

        $i_name = "coe";


        return view('institution.index', compact('institutions', 'i_name'));
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

        return view('institution.byprogram', compact('programs'));
    }

    public function show($id) {

        $institution = Institution::find($id);

        return view('institution.show', compact('institution'));
    }

}
