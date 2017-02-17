@extends ('layouts.master')

@section('content')
<div class="row center">
 {{$questions->links()}}   
</div>
    @foreach ($questions as $question)
    <div class="row">
        <div class="col s2">
            <a href="{{route('question', $question->id)}}">{{$question->title}}</a>
        </div>

        <div class="col s2">
            {{{$question->status}}} le {{$question->date}}
        </div>

        <div class="col s3">
            {{$question->abstract}}
        </div>
        <div class="col s3">
            <a href="{{route('category', $question->category_id)}}" class="btn">{{($question->category) ? $question->category->name : 'Sans catégorie'}}</a>
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