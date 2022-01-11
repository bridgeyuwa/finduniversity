@extends('layouts.tri-base')


@section('content')

<section>
    <div class="text-aqua">
        <h1>Schools offering @if(!is_null($program)) "{{Illuminate\Support\Str::headline($program->name)}}" @endif courses in @if(!is_null($state)) {{$state->name}}, @endif Nigeria</h1>            
        Universities offering courses in Nigeria.
        Whenever possible we provide detailed information about the courses in each of the schools, including tuition fees, admission requirements and course description. 

        <hr>

        <div class=" container row row-cols-2 ">
            <div class="col">
                <h3>RESULTS ( {{$institutions->total()}})</h3>
            </div>
            <div class="col">
                <select class="form-control">
                    <option value="">Tuition fees: Default</option>
                    <option value="TuitionFeesBachelors">Tuition fees: low - high</option>
                    <option value="TuitionFeesMasters">Tuition fees: high - low</option>

                </select>
            </div>
        </div>
    </div>
</section>


<div class="blog classic-view py-14 py-md-16">

    {{ $institutions->links() }}


    @foreach ($institutions as $institution)
    <article class="post">
        <div class="card bg-body">

           
            <div class="card-body">
                <div class="post-header">
                    <h2 class="post-title mt-1 mb-0 text-center"><a class="link-dark" href="/institutions/{{$institution->id}}">{{$institution->name}}</a></h2>
                </div>
                <div class="post-content">


                    <ul>
                        <li>{{$institution->schooltype->name}} {{$institution->category->name}},  {{$institution->state->name}}</li>
                        <li>Bachelor's ₦ 60,000-90,000 per year</li>
                        <li>Master's ₦ 22,500-40,000 per year</li>
                    </ul>






                </div>
                <!-- /.post-content -->
            </div>
            <!--/.card-body -->
            <div class="card-footer"> 


                <div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-evenly">
                    <div class="p-2 bd-highlight">Flex item 1</div>
                    <div class="p-2 bd-highlight">Flex item 2</div>
                    <div class="p-2 bd-highlight">Flex item 3</div>
                </div>

            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </article>
    @endforeach


    {{ $institutions->links() }}

</div>




@endsection


@section('aside')
@include('partials.aside-filter')
@endsection