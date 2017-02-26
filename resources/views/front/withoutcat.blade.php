@extends('layouts.master')

@section('content')
<p>Vous trouverez ici les questions sans catégorie: <div class="btn grey">Sans catégorie</div></p>
<div class="row">
          <ul class="collection with-header">
            <li class="collection-header"><h5>Sans catégorie</h5></li>
        @foreach ($questions as $question)
            <li class="collection-item"><a href="{{route('question', $question->id)}}">{{$question->title}}</a></li>
        @endforeach
        </ul>
</div>


<div class="row center">
</div>


@endsection