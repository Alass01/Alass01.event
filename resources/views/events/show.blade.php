@extends('layout.app')

@section('content')
<h1>{{$event->title}} </h1>
<p>{{$event->description}}</p>
<a href="{{route('home')}}">RETOUR</a>