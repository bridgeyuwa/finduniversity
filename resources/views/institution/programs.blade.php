@extends('layouts.tri-base')

@section('content')



<h3> {{$institution->name}}</h3>


<section>
    <div class="text-aqua">
        <h1>Schools offering  courses in Nigeria</h1>            
        A list of  Universities, Polytechnics and Colleges offering  courses in Nigeria.&nbsp;
        Whenever possible we provide full details about the courses in each of the schools, including tuition fees, admission requirements, course description and the admission phone number. 

        <hr class="m-4">
        
    </div>
</section>


<div class="card g-0">
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

<br><!-- comment -->
<br>



@endsection