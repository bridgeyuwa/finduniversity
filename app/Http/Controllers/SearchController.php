<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\State;
use App\Models\College;
use App\Models\Program;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller {

    public function index(Request $request) {

        $states = State::all(); 
        $colleges = College::all();


        $location = $request->input('location'); 
        $degreelevel = $request->input('degreelevel');
        $program_id = $request->input('program');
        $schooltype = $request->input('schooltype');

        if ($degreelevel == null) {
            $programstable = 'programs';
        } elseif ($degreelevel == "deg") {  //partially complete alpha testing
            $programstable = "programdegree";
        } elseif ($degreelevel == "nd") {
            $programstable = "Programnd";
        } elseif ($degreelevel == "nce") {
            $programstable = "Programnce";
        } else {
            Die('Error in degree table selection');
        }


        if (isset($location) && isset($program_id) && isset($schooltype)) {

            $institutions = Institution::whereHas($programstable, function (Builder $query) use ($program_id) {
                        $query->where('id', '=', $program_id);
                    })->where('state_id', $location)->where('schooltype_id', $schooltype)->paginate(30);

            $institutions->withPath('search?location=' . $location . '&degreelevel=' . $degreelevel . '&program=' . $program_id . '&schooltype=' . $schooltype);
            echo "All set";

            echo $schooltype;
        } elseif (!isset($location) && isset($program_id) && isset($schooltype)) {

            $institutions = Institution::whereHas($programstable, function (Builder $query) use ($program_id) {
                        $query->where('id', '=', $program_id);
                    })->where('schooltype_id', $schooltype)->paginate(30);

            $institutions->withPath('search?location=' . $location . '&degreelevel=' . $degreelevel . '&program=' . $program_id . '&schooltype=' . $schooltype);

            echo "Only Program and schooltype set";
        } elseif (isset($location) && !isset($program_id) && isset($schooltype)) {

            $institutions = Institution::where('state_id', $location)->where('schooltype_id', $schooltype)->paginate(30);
            $institutions->withPath('search?location=' . $location . '&degreelevel=' . $degreelevel . '&program=' . $program_id . '&schooltype=' . $schooltype);
            echo "Only Location and schooltype set";
        } elseif (isset($location) && isset($program_id) && !isset($schooltype)) {

            $institutions = Institution::whereHas($programstable, function (Builder $query) use ($program_id) {
                        $query->where('id', '=', $program_id);
                    })->where('state_id', $location)->paginate(30);
            $institutions->withPath('search?location=' . $location . '&degreelevel=' . $degreelevel . '&program=' . $program_id . '&schooltype=' . $schooltype);
            echo "Location and program set";
        } elseif (isset($location) && !isset($program_id) && !isset($schooltype)) {


            $institutions = Institution::where('state_id', $location)->paginate(30);
            $institutions->withPath('search?location=' . $location . '&degreelevel=' . $degreelevel . '&program=' . $program_id . '&schooltype=' . $schooltype);
            echo " Only Location set";
        } elseif (!isset($location) && isset($program_id) && !isset($schooltype)) {

            $institutions = Institution::whereHas($programstable, function (Builder $query) use ($program_id) {
                        $query->where('id', '=', $program_id);
                    })->paginate(30);
            $institutions->withPath('search?location=' . $location . '&degreelevel=' . $degreelevel . '&program=' . $program_id . '&schooltype=' . $schooltype);
            echo "Only program set";
        } elseif (!isset($location) && !isset($program_id) && isset($schooltype)) {

            $institutions = Institution::where('schooltype_id', $schooltype)->paginate(30);
            echo "Only Schooltype set";

            $institutions->withPath('search?location=' . $location . '&degreelevel=' . $degreelevel . '&program=' . $program_id . '&schooltype=' . $schooltype);
        } else {
            if (isset($degreelevel)) {
                $institutions = Institution::has($programstable)->paginate(30);
            } else {
                $institutions = Institution::paginate(30);
                $institutions->withPath('search?location=' . $location . '&degreelevel=' . $degreelevel . '&program=' . $program_id . '&schooltype=' . $schooltype);
            }
        }


        $program = Program::find($program_id);

        return view('search-result', compact('institutions', 'states', 'colleges', 'program'));
    }

}
