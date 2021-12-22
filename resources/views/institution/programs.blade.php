@extends('layouts.base')

@section('content')



<ul><h3><u><b> {{$institution->name}}</b></u></h3></ul>

@foreach( App\Models\Institution::find($institution->id)->programs; as $program )
{{$program->name}} </br>

@endforeach




</br>
</br>


@endsection