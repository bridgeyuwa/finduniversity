@extends('layouts.base')

@section('content')
@foreach($regions as $region)
<ul><h3><u><b> {{$region->name}}</b>  -------- ( {{ count(App\Models\Region::find($region->id)->institutions) }}  schools ) </u></h3> </ul>  

@foreach( App\Models\Region::find($region->id)->states; as $state )

{{$state->name}}    -------------------       <a href="{{url("/search?location={$state->id}")}}"> ( {{ count(App\Models\State::find($state->id)->institutions) }}  schools ) </a> </br> 
@endforeach

</br>
</br>
@endforeach

@endsection