@extends('layouts.base')


@section('content')


<div class="container">
<div class="row">
@foreach( $programs as $program )

<div class="col-6 col-sm-3"><a href="programs/{{$program->id}}" > {{$program->name}} </a> </div>

 @for($i= count($programs);$i<2 ; $i-- )
  <div class="w-100"></div>
 @endfor

   

@endforeach

</div>
</div>

@endsection