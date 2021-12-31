@extends('layouts.tri-base')


@section('search')<!-- comment -->

@include('partials.search')

@endsection


@section('content')



<section>
    <div class="text-aqua">
        <h1>Schools offering  courses in Nigeria</h1>            
        A list of  Universities, Polytechnics and Colleges offering  courses in Nigeria.&nbsp;
        Whenever possible we provide full details about the courses in each of the schools, including tuition fees, admission requirements, course description and the admission phone number. 

        <hr class="m-4">
    </div>
</section>






{{ $programs->links() }}

</br>
<div class="row g-m-6">
    @foreach( $programs as $program )

    <div class="col-12 ">

        <div class="accordion accordion-wrapper" id="accordionExample">
            <div class="card accordion-item">
                <div class="card-header text-center" id="headingOne">

                    <a href="programs/{{$program->id}}" > {{$program->name}}</a> 

                </div>
            </div>
        </div>


    </div>

    @endforeach

</div>

</br>

{{ $programs->links() }}


@endsection