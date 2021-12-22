@extends('layouts.base')

@section('content')


@php
    //
@endphp

<div class="row">
    @foreach($colleges as $college)
      <div class="col-lg-6">
       <div class="mb-5">
          <table class="table">
            <thead class="thead-default">
              <tr>
                  <h3><u><b> College of {{$college->name}}   ( {{count($college->programs)}} programs )</b></u></h3>
              </tr>
            </thead>
            <tbody>
                
                @foreach( App\Models\College::find($college->id)->programs; as $program )
              <tr>
               
                  <td> <a href= "{{url("/programs/{$program->id}")}}"> {{$program->name}} </a>       -----------------   <a href="{{ url("/search?program={$program->id}")}}"> ( {{count($program->institutions)}} schools ) </a> </td>  
                 
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
</div>
@endforeach
</div>



@endsection