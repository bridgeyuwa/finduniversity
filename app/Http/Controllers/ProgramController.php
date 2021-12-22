<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Institution;
use App\Models\State;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {

      
        $programs = Program::all();
        
        
       /* foreach($programs as $program){
        echo "$program->id</br>";
        }
        * 
        */
        
        
        return view('program.index', compact('programs'));
    }
    
    public function show($id) {
        
        $program = Program::find($id);

        return view('program.show', compact('program'));
    }
}
