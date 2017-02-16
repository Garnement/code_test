@extends ('layouts.admin')

@section('content')
<h1>Ajouter une nouvelle question</h1>

<div class="row">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <p>Une erreur est survenue.</p>
    </div>
  @endif
</div>

<div class="row">
<!-- début du formulaire -->
    <form class="col s12" action="{{route('question.store')}}" method="post">
    <!-- token indispensable -->
        <div class="row">
            {{csrf_field()}}
        </div>
    <!-- titre -->
      <div class="row">
        <div class="input-field col s6">
          <input id="title" type="text" class="validate" value="{{old('title')}}" name="title">
          <label for="title">Titre de la question</label>
        </div>
     </div>

<!-- résumé -->
    <div class="row">
        <div class="input-field col s12">
            <input id="abstract" type="text" class="validate" value="{{old('abstract')}}" name="abstract">
            <label for="abstract">Résumé de la question</label>
        </div>
    </div>

<!-- contenu de la question -->
    <div class="row">
        <div class="input-field col s12">
          <textarea id="content" class="materialize-textarea" value="{{old('content')}}" name="content"></textarea>
          <label for="content">Question</label>
        </div>
    </div>

<!-- categorie du robot -->
    <div class="row">
      <div class="input-field col s12">
       <select name="category_id">
         <option value="0" selected>Aucune catégorie</option>
         @foreach ($category as $id => $name)
          <option {{ ( old('category_id') == $id) ? 'selected' : '' }} value="{{$id}}">{{$name}}</option>
         @endforeach
       </select>
       <label>Catégorie du robot</label>
       @if ($errors->has('category_id')) <span> {{$errors->first('category_id')}}</span> @endif
     </div>
   </div>

<!-- publication de la question -->
     <div class="row">
        <label class="input-field col s12">Publier le question ?</label>
            <div class="switch">
                <label class="input-field col s12">
                    Non
                    <input type="checkbox" name="published_at" value="on" {{ ( old('published_at') == 'on' ) ? 'checked' : ''}}>
                    <span class="lever"></span>
                    Oui
                </label>
            </div>
        </div>

<!-- bouton soumission -->
    <div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">Créer
                <i class="material-icons right">mode_edit</i>
            </button>
        </div>
    </form>
</div>

@endsection