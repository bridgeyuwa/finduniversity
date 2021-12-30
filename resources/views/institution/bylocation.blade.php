@extends('layouts.tri-base')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row g-6">

            @foreach($regions as $region)
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="d-flex flex-row bd-highlight d-flex justify-content-between">
                            <div class="bd-highlight"><h3>{{$region->name}}</b> </h3></div>
                            <div class="bd-highlight"><span class="badge bg-primary rounded-pill">{{ count(App\Models\Region::find($region->id)->institutions) }}  schools </span></div>
                        </div>



                    </div>
                    <div class="card-body">

                        @foreach( App\Models\Region::find($region->id)->states; as $state )
                        <div class="d-flex flex-row bd-highlight d-flex justify-content-between">
                            <div class=" bd-highlight"> {{$state->name}} </div>       <div class=" bd-highlight"> <a href="{{url("/search?location={$state->id}")}}"> ( {{ count(App\Models\State::find($state->id)->institutions) }}  schools ) </a> </div>
                        </div>
                        </br>
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








@endsection