@extends ('layouts.admin')

@section('content')
<h1>Modifier la question</h1>

<div class="row">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <p>Une erreur est survenue.</p>
    </div>
  @endif
</div>

<div class="col s9">
<!-- début du formulaire -->
    <form class="col s12" action="{{route('question.update', $question->id)}}" method="post">
    <!-- token indispensable -->
        <div class="row">
            {{csrf_field()}}
            {{method_field('PUT')}}
        </div>
    <!-- titre -->
      <div class="row">
        <div class="input-field col s6">
          <input id="title" type="text" class="validate" value="{{( old('title') ) ? old('title') : $question->title }}" name="title">
          <label for="title">Titre de la question</label>
        </div>
     </div>

<!-- résumé -->
    <div class="row">
        <div class="input-field col s12">
            <input id="abstract" type="text" class="validate" value="{{( old('abstract') ) ? old('abstract') : $question->abstract }}" name="abstract">
            <label for="abstract">Résumé de la question</label>
        </div>
    </div>

<!-- contenu de la question -->
    <div class="row">
        <div class="input-field col s12">
          <textarea id="content" class="materialize-textarea" value="{{( old('content') ) ? old('content') : $question->content }}" name="content">{{$question->content}}</textarea>
          <label for="content">Question</label>
        </div>
    </div>

<!-- categorie du question -->
    <div class="row">
      <div class="input-field col s12">
       <select name="category_id">
         <option value="0" selected>Aucune catégorie</option>
         @foreach ($category as $id => $name)
            <option {{ ($question->category ? $question->category->id == $id : false) ? 'selected' : '' }} value="{{$id}}">{{$name}}</option>
         @endforeach
       </select>
       <label>Catégorie du robot</label>
       @if ($errors->has('category_id')) <span> {{$errors->first('category_id')}}</span> @endif
     </div>
   </div>

<!-- publication de la question -->
     <div class="row">
        <label class="input-field col s12">Publier la question ?</label>
            <div class="switch">
                <label class="input-field col s12">
                    Non
                    <input type="checkbox" name="status" value="on" {{ ($question->status == 'published') ? 'checked' : ''}}>
                    <span class="lever"></span>
                    Oui
                </label>
            </div>
        </div>

<!-- bouton soumission -->
    <div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light grey darken-1" type="submit" name="action">Modifier
                <i class="material-icons right">mode_edit</i>
            </button>
        </div>
    </div>
    </form>
</div>
@endsection