@extends('layouts.tri-base')

@section('title')
All Universities offering {{$program->name}}
@endsection

@section('description')
A list of all Universities that offer {{$program->name}}
@endsection

@section('search')<!-- comment -->

@include('partials.search')

@endsection

@section('content')

<section>
    <div class="text-aqua">
        <h1>All Universities offering {{$program->name}}</h1>            
        A list of all Universities that offer {{$program->name}}
       
        <hr class="m-4">
        
    </div>
</section>



<div class="blog classic-view py-14 py-md-16">
   


        <div class="row g-m-6">

            @foreach( App\Models\Program::find($program->id)->institutions; as $institution )


            <div class="col-12 ">

                <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card accordion-item">
                        <div class="card-header text-center" id="headingOne">

                            <a href="{{url("institutions/{$institution->id}")}}" > {{$institution->name}}</a> 

                        </div>
                    </div>
                </div>


            </div>
            @endforeach

        </div>


    
</div>


@endsection