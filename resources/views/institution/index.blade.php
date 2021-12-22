@extends('layouts.base')


@section('content')

<table class="table table-striped" >
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th class="h3">
                    
                    @if($i_name =="universities")
                    {{'UNIVERSITIES'}}
                    @elseif($i_name =="polytechnics")
                    {{'POLYTECHNICS'}}
                    @elseif($i_name =="monotechnics")
                    {{'MONOTECHNICS'}}
                    @elseif($i_name =="coe")
                    {{'COLLEGES OF EDUCATION'}}
                    @else
                    {{'INSTITUTIONS'}}
                    @endif
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