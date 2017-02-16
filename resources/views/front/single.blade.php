@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col s12">
        <h2 class="center"><small>Titre:</small>{{$question->title}}</h2>
        <p>Enoncé:<br>{{$question->content}}</p>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="answer" class="materialize-textarea"></textarea>
                <label for="answer">Ecrivez ici votre réponse</label>
                <button class="btn waves-effect waves-light" type="submit" name="action">Répondre
                <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </div>
</div>



@endsection