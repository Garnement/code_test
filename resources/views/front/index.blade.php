@extends ('layouts.master')

@section('content')
<div class="row center">
 {{$questions->links()}}   
</div>
    <div class="row">
        <div class="col s2">
            <div class="chip">Titre</div>
        </div>
        <div class="col s2">
            <div class="chip">Date de publication</div>
        </div>
        <div class="col s3">
           <div class="chip">Résumé</div>
        </div>
        <div class="col s3">
            <div class="chip">Catégorie</div>
        </div>
        <div class="col s2">
            <div class="chip">Acceder à la question</div>
        </div>  

    </div>
    @foreach ($questions as $question)
    <div class="row">
        <div class="col s2">
            <a href="{{route('question', $question->id)}}">{{$question->title}}</a>
        </div>

        <div class="col s2">
            {{$question->date}}
        </div>

        <div class="col s3">
            {{$question->abstract}}
        </div>
        <div class="col s3">
            <a href="{{  $question->category ? (route('category', $question->category_id)) : (route('frontNoCat'))  }}" class="btn {{($question->category) ? ($question->category->id == 1 ? 'blue' : 'green') : 'grey'}}">{{($question->category) ? $question->category->name : 'Sans catégorie'}}</a>
        </div>
        <div class="col s2">
            <a href="{{route('question', $question->id)}}">Lire la suite</a>
        </div>
    </div>
    @endforeach
<div class="row center">
{{$questions->links()}}
</div>
@endsection