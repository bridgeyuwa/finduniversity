@extends('layouts.base')

@section('content')

@foreach($colleges as $college)
<ul><h3><u><b> {{$college->name}}</b> </u></h3> </ul>  

@foreach( App\Models\College::find($college->id)->programs; as $program )

{{$program->name}}    ------------------- <a href="{{url("/search?program={$program->id}")}}"> ( {{ count(App\Models\Program::find($program->id)->institutions) }}  @if (count(App\Models\Program::find($program->id)->institutions) > 1) {{'schools'}} @else {{'school'}}  @endif ) </a> </br> 
@endforeach

</br>
</br>
@endforeach

@endsection