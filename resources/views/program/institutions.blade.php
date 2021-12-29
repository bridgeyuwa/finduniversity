@extends('layouts.base')

@section('content')


<ul><h3><u><b> {{$program->name}}</b></u></h3></ul>


@foreach( App\Models\Program::find($program->id)->institutions; as $institution )

{{$institution->name}}      </br>
@endforeach


</br>
</br>





@endsection