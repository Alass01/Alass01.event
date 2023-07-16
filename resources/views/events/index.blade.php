@extends('layout.app')

@section('content')
<a href="{{route('events.create')}}">ENREGISTRER UN CANDIDAT</a>
<h1>{{$events->count()}} {{ Str::plural('Evenement')}}  </h1>

@if(count($events)>0)
<ul>
@foreach($events as $element)
    <li><a href="{{route('events.show',['event'=>$element->id])}}">{{$element->title}}</a>
    </li>
    @endforeach
        </ul>
        @else
        <p>aucun candidat</p>

    @endif

@stop

