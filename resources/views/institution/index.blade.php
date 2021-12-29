@extends('layouts.base')


@section('content')

<table class="table table-striped" >
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th class="h3">
                  {{'UNIVERSITIES'}}
                    </th>
                
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
             
              
               @foreach( $institutions as $institution )
              <tr>
                <th scope="row">{{$institution->id}}</th>
                <td><a href="{{url("/institutions/{$institution->id}")}}">{{$institution->name}}</a>    <small class="text-uppercase text-default">{{$institution->state->name}}</small></td>
              
                <td>{{$institution->schooltype->name}} {{$institution->category->name}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
  


@endsection