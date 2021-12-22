@extends('layouts.base')

@section('content')
@foreach($programs as $program)
<ul><h3><u><b> {{$program->name}}</b> ( {{ count(App\Models\Program::find($program->id)->institutions) }}  schools ) </u></h3> </ul>  

@foreach( App\Models\Program::find($program->id)->institutions; as $institution )

{{$institution->name}}      </br>
@endforeach

</br>
</br>
@endforeach

@endsection