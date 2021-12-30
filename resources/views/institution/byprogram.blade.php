@extends('layouts.base')

@section('content')





<div class="card">
    <div class="card-body">
        <div class="row g-6">

            @foreach($colleges as $college)
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$college->name}}</h5>

                        @foreach( App\Models\College::find($college->id)->programs; as $program )

                        {{$program->name}}    ------------------- <a href="{{url("/search?program={$program->id}")}}"> ( {{ count(App\Models\Program::find($program->id)->institutions) }}  @if (count(App\Models\Program::find($program->id)->institutions) > 1) {{'schools'}} @else {{'school'}}  @endif ) </a> </br> 
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