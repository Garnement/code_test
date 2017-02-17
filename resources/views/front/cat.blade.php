@extends('layouts.master')

@section('content')
<p>Vous trouverez ici toutes les questions de la catégorie : {{$name}}</p>
<p>Description: {{$category->description}}</p>
<div class="row">
@foreach ($questions as $question)
    <div class="col s4"><a href="{{route('question', $question->id)}}">{{$question->title}}</a></div>
@endforeach
</div>


@endsection