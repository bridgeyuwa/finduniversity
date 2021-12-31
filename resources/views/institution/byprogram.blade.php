@extends('layouts.base')



@section('content')

<div class="container">
@include('partials.search')
</div>

<div class="container">
<div class="card">
    <div class="card-body">
        <div class="row g-6" data-masonry='{"percentPosition": true }'>

            @foreach($colleges as $college)
            <div class="col-lg-6">
                <div class="card">
                    
                    <div class="card-header text-center">
                        <h1>{{$college->name}}</h1>
                    </div>
                    
                    <div class="card-body">
                        

                        @foreach( App\Models\College::find($college->id)->programs; as $program )


                        <div class="d-flex flex-row bd-highlight d-flex justify-content-between m-1">

                            <div class=" bd-highlight"> 
                                {{$program->name}}
                            </div>  
                            <div class=" bd-highlight">  
                                <a href="{{url("/search?program={$program->id}")}}" class="btn btn-outline-gradient gradient-7 btn-sm rounded-pill"><span>{{ count(App\Models\Program::find($program->id)->institutions) }}  @if (count(App\Models\Program::find($program->id)->institutions) > 1) {{'schools'}} @else {{'school'}}  @endif</span></a>
                            </div>
                        </div>
                        <hr class="m-0">

                        @endforeach

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            @endforeach
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</div>
</div>


@endsection