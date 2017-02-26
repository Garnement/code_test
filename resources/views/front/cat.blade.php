@extends('layouts.master')

@section('content')
<p>Vous trouverez ici toutes les questions de la catégorie : <div class="btn {{$category->id == 1 ? 'blue' : 'green'}}">{{$name}}</div></p>
<div class="row">
          <ul class="collection with-header">
            <li class="collection-header"><h5>Description: {{$category->description}}</h5></li>
        @foreach ($questions as $question)
            <li class="collection-item"><a href="{{route('question', $question->id)}}">{{$question->title}}</a></li>
@endforeach
        </ul>
</div>


<div class="row center">
    {{$questions->links()}}
</div>

@endsection