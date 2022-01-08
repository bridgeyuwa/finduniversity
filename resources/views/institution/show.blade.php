@extends('layouts.tri-base')

@section('title')
{{$institution->name}} | {{$institution->abbr}}
@endsection


@section('description')
History, tuition/school fees, course offered, faculties, ranking, Contact information and more.. 
@endsection




@section('search')<!-- comment -->

@include('partials.search')

@endsection



@section('content')

<section>
    <div class="text-aqua">

        <h1 class="display-6"> {{$institution->name}}</h1>

        A general overview of  {{$institution->name}} of {{$institution->state->name}} State.
        Whenever possible we provide details about the courses offered, school/tuition fees, admission requirements, course description, ranking, Contact information and more.. 

        <hr class="m-4">
    </div>
</section>







<div class="card wrapper" ">

    <div class="card-body">



        <h3>
            <i class="fas fa-lightbulb"></i>
            Highlights
        </h3>
        <div class="list-info">
            <ul>
                <li>
                    <p>
                        <strong>Type:</strong> {{$institution->schooltype->name}} {{$institution->category->name}}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>Established:</strong> {{$institution->established}}
                    </p>
                </li>
                <li>
                    <p>
                        <strong>Entrance exam:</strong> Required (JAMB)
                    </p>
                </li>

                <li>
                    <p>
                        <strong>Term structure:</strong> {{$institution->term->name}}
                    </p>
                </li>

                <li>
                    <p><strong>School year:</strong> starts in September <i class="small">(May be different due to Covid-19)</i></p>
                </li>

            </ul>
        </div><!-- /.list-info -->


        <h3>
            <i class="fas fa-money-bill-alt"></i>
            Tuition Fees
        </h3>
        <div class="tuition-fees">

            <div class="cols">

                <div class="col col--1of2">
                    <div class="fee">
                        <p><strong>Bachelor's degree:</strong></p>
                        <p>
                            @if(!is_null($institution->name) && !is_null($institution->established))
                            <span class="Amount">₦ 80,000-120,000</span> per year 
                            @else
                            (Fees not available)
                            @endif

                            <i class="small">(Fees are based on first year and are subject to change.)</i>

                        </p>
                    </div><!-- /.fee -->
                </div><!-- /.col -->

            </div><!-- /.cols -->
        </div><!-- /.tuition-fees -->


        <h3>
            <i class="fas fa-list-ul"></i>
            Courses Offered
        </h3>
        <div class="list-info list-info--orange">
            <ul>

                <li><a href=" {{url("institutions/{$institution->id}/courses")}}">Bachelor's courses</a> ({{count($institution->programs)}})</li>

                <li id="#masters"><a href="#masters">Masters courses</a> (3)</li>

                <li id="#phd"><a href="#phd">Doctorate courses </a> (3)</li>


            </ul>
            <ul>

            </ul>
        </div><!-- /.list-info -->






        <h3>
            Rankings
        </h3>
        <div class="table container">

            <p>Based on Webometrics Web Presence Ranking</p>

            <table class="table table-hover">

                <tbody><tr>
                        <td>Rank in Nigeria</td>
                        <td> @if ($institution->rank) {{$numberformatter->format($institution->rank)}} @else NR @endif out of {{ count(App\Models\Institution::all())}} schools</td>
                    </tr>

                    <tr>
                        <td>Rank in {{$state->region->name}}</td>
                        <td> @if ($regionRank) {{$numberformatter->format($regionRank)}} @else NR @endif out of {{count(\App\Models\Region::find($state->region->id)->institutions)}} schools</td>
                    </tr>

                    <tr>
                        <td>Rank in {{$institution->state->name}}</td>
                        <td> @if ($stateRank) {{$numberformatter->format($stateRank)}} @else NR @endif out of {{count(App\Models\State::find($state->id)->institutions)}} schools</td>
                    </tr>

                </tbody></table>
        </div><!-- /.table -->






        <div class="">
            <h3>
                <i class=""></i>
                Location
            </h3>

            <p class="container"><strong>Address:</strong> {{$institution->address}} {{$institution->state->name}} State </p>

        </div>
        
        <div class="">
        <h3>
            <i class=""></i>
            Catchments
        </h3>

        <p class="container"> @if($institution->catchment) 
            {{$institution->catchment}}   
            </br> 
            <i class="small text-center">(Candidates from these states have more chances of gaining admission into the University)</i> </p>

            @else  All States of the Federation      
            @endif   
            
    </div>
        
        
        
    </div>
    <!--/.card-body -->

    





</div>


<br>
<br>


@endsection


@section('aside')
<aside class="col-lg-4 sidebar mt-8 mt-lg-6">
    Sidebar for Advertisements and promotions
</aside>
@endsection