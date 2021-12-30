<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Institution;
use App\Models\State;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function index() {

      
        //$programs = Program::all()->paginate(100);
        $programs = DB::table('programs')->where('college_id','<' ,200 )->paginate(85);  //workaround to be able to paginate 
      
        
        
        return view('program.index', compact('programs'));
    }
    
    public function show($id) {
        
        $program = Program::find($id);

        return view('program.show', compact('program'));
    }
    
    
     public function institutions($id) {
        
        $program = Program::find($id);

       
        return view('program.institutions', compact('program'));
    }
    
}
