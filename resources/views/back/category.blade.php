@extends ('layouts.admin')

@section ('content')
<p>Voici la liste complète des questions de la catégorie: {{$name}}</p>

<div class="row center">
    {{$questions->links()}}
</div>

<table class="striped">
       <thead>
         <tr>
             <th>Titre</th>
             <th>Publiée</th>
             <th>Date</th>
             <th>Action</th>
         </tr>
       </thead>
    <tbody>
    @foreach ($questions as $question)
    <tr>
        <td><a href="{{route('question.edit', $question->id)}}">{{$question->title}}</a></td>
        <td><i class="material-icons">{{($question->status == 'published') ? 'done' : 'loop'}}</td>
        <td>{{$question->date}}</td>
        <td>
            <a href="{{route('question.edit', $question->id)}}"><button class="waves-effect waves-blue btn blue lighten-3"><i class="material-icons">mode_edit</i></button></a>

            <form action="{{route('question.destroy', $question->id)}}" method="post">
                <!-- insertion du token -->
                <div class="row">
                  {{csrf_field()}}
                  <!-- Utilisation de la méthode DELETE -->
                  {{ method_field('DELETE') }}
                </div>
                <a href="#modal1"><button type="submit" name="action" class="waves-effect waves-orange btn red lighten-3"><i class="material-icons">delete</i></button></a>

                    <!-- Fenêtre modale -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>/!\ Attention /!\</h4>
                            <p>Confirmez vous la suppression de la question ?</p>
                            <p>{{$question->id}}</p>
                        </div>
                        
                        <div class="modal-footer">
                            <a href="{{route('question.destroy', $question->id)}}" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat green lighten-3">Oui</a>
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red lighten-3">Non</a>
                        </div>
                    </div>
            </form>
        </td>
    </tr>
    
    @endforeach
    </tbody>
</table>
<div class="row center">
    {{$questions->links()}}
</div>
@endsection