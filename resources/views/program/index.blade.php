@extends('layouts.tri-base')





@section('content-card')


<div class="card">
    
        {{ $programs->links() }}
        <div class="row g-m-6">
            @foreach( $programs as $program )

            <div class="col-lg-4 col-md-6 ">
                
                <div class="accordion accordion-wrapper" id="accordionExample">
            <div class="card accordion-item">
                <div class="card-header text-center" id="headingOne">
                
                <a href="programs/{{$program->id}}" > {{$program->name}}</a> 
                
                </div>
            </div>
                </div>
               
                
            </div>

            @for($i= count($programs);$i<2 ; $i-- )
            <div class="w-100"></div>
            @endfor



            @endforeach

        </div>
        {{ $programs->links() }}
    
</div>

@endsection