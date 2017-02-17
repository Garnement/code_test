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
    <!-- titre de la question -->
      <div class="row">
        <div class="input-field col s6">
          <input id="title" type="text" class="validate" value="{{old('title')}}" name="title">
          <label for="title">Titre de la question</label><i class="material-icons">warning</i>
           @if ($errors->has('title')) <span> {{$errors->first('title')}}</span> @endif
        </div>
     </div>

<!-- résumé de la question-->
    <div class="row">
        <div class="input-field col s12">
            <input id="abstract" type="text" class="validate" value="{{old('abstract')}}" name="abstract">
            <label for="abstract">Résumé de la question</label>
             @if ($errors->has('abstract')) <span> {{$errors->first('abstract')}}</span> @endif
        </div>
    </div>

<!-- contenu de la question -->
    <div class="row">
        <div class="input-field col s12">
          <textarea id="content" class="materialize-textarea" value="{{old('content')}}" name="content"></textarea>
          <label for="content">Question</label><i class="material-icons">warning</i>
           @if ($errors->has('content')) <span> {{$errors->first('content')}}</span> @endif
        </div>
    </div>

<!-- categorie de la question -->
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
        <label class="input-field col s12">Publier la question ?</label>
            <div class="switch">
                <label class="input-field col s12">
                    Non
                    <input type="checkbox" name="status" value="on" {{ ( old('status') == 'on' ) ? 'checked' : ''}}>
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
</div>

@endsection
