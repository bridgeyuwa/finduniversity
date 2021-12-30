@extends('layouts.tri-base')

@section('content')


<ul><h3><u><b> {{$program->name}}</b></u></h3></ul>


<div class="blog classic-view py-14 py-md-16">
    <div class="card">


        <div class="row g-m-6">

            @foreach( App\Models\Program::find($program->id)->institutions; as $institution )


            <div class="col-12 ">

                <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card accordion-item">
                        <div class="card-header text-center" id="headingOne">

                            <a href="institutions/{{$institution->id}}" > {{$institution->name}}</a> 

                        </div>
                    </div>
                </div>


            </div>
            @endforeach

        </div>


    </div>
</div>


@endsection