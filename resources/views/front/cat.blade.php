@extends('layouts.master')

@section('content')
<p>Vous trouverez ici toutes les questions de la catégorie : {{$name}}</p>
<ul>
@foreach ($questions as $question)
    <li><a href="{{route('question', $question->id)}}">{{$question->title}}</a></li>
@endforeach



@endsection