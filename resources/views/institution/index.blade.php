@extends('layouts.bi-base')


@section('content')


<section>
    <div class="text-aqua">
        <h1>Schools offering  courses in Nigeria</h1>            
        A list of  Universities, Polytechnics and Colleges offering  courses in Nigeria.&nbsp;
        Whenever possible we provide full details about the courses in each of the schools, including tuition fees, admission requirements, course description and the admission phone number. 

        <hr class="m-4">
    </div>
</section>





<div class="row g-m-6">
    @foreach( $institutions as $institution )

    <div class="col-12 ">

        <div class="accordion accordion-wrapper" id="accordionExample">
            <div class="card accordion-item">
                <div class="card-header text-center" id="headingOne">

                    <div class="d-flex flex-row bd-highlight mb-3 justify-content-between">
                        <div class="bd-highlight"><a href="{{url("/institutions/{$institution->id}")}}">{{$institution->name}}</a></div>
                        <div class="bd-highlight">{{$institution->schooltype->name}} {{$institution->category->name}}</div>
                    </div>

                </div>
            </div>
        </div>
 </div>

    @endforeach

</div>

@endsection