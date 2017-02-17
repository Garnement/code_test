@extends('layouts.admin')



@section('content')
<div class="row">
    <p>Parce que tout ne rentre pas toujours parfaitement dans des cases, voici la liste des questions sans catégorie !</p>
</div>

<div class="row">
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Publiée ?</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td><a href="{{route('question.edit', $question->id)}}">{{$question->title}}</a></td>
                    <td><i class="material-icons">{{($question->status == 'published') ? 'done' : 'loop'}}</i></td>
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
                            <button type="submit" name="action" class="waves-effect waves-orange btn red lighten-3"><i class="material-icons">delete</i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>





@endsection
{{dump($questions)}}