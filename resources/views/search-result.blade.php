@extends('layouts.tri-base')


@section('content-card')

<section>
    <div>
        <h1>Schools offering @if(isset($program)){{$program->name}} @endif courses in Nigeria</h1>            
        A list of  Universities, Polytechnics and Colleges offering @if(isset($program)){{$program->name}} @endif courses in Nigeria.&nbsp;
        Whenever possible we provide full details about the courses in each of the schools, including tuition fees, admission requirements, course description and the admission phone number. 

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
        <div class="card">

            <!-- /.post-slider -->
            <div class="card-body">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Ideas</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="/institutions/{{$institution->id}}">{{$institution->name}}</a></h2>
                </div>
                <!-- /.post-header -->
                <div class="post-content">


                    <ul>
                        <li>{{$institution->schooltype->name}} {{$institution->category->name}},  {{$institution->state->name}}</li>
                        <li>Apply to this Institution</li>
                        <li>BS in Computer Science</li>
                        <li>MS in Computer Science</li>
                        <li>Bachelor's ₦ 60,000-90,000 per year</li>
                        <li>Master's ₦ 22,500-40,000 per year</li>
                    </ul>






                </div>
                <!-- /.post-content -->
            </div>
            <!--/.card-body -->
            <div class="card-footer"> 

                <ul class="nav nav-tabs nav-pills">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1"><i class="uil uil-phone-volume pe-1"></i><span>Support</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab1-2"><i class="uil uil-shield-exclamation pe-1"></i><span>Payments</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab1-3"><i class="uil uil-laptop-cloud pe-1"></i><span>Updates</span></a> </li>
                </ul>

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