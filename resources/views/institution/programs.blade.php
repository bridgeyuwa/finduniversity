@extends('layouts.tri-base')

@section('content')



<h3> {{$institution->name}}</h3>





<div class="card">
    <div class="card-body">
        <div class="row g-6">

            
            <div class="col-12">
                <div class="card">
                    
                    <div class="card-body">

                        @foreach( App\Models\Institution::find($institution->id)->programs; as $program )
                        {{$program->name}} </br>

                        @endforeach

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</div>



@endsection