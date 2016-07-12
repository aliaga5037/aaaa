@extends('layouts.app')
@section('sual')

<div class="col-md-2">
    <a href="/{{$catName->id}}/question" class="btn btn-primary" style="margin-top: 8px;">Sual ver</a>
</div>
@stop
@section('content')
<div class="container">
    <div class="row">
        @foreach($ques as $question)
        <div class="col-md-10 col-md-offset-1">
            @if ($question->user->role == 'muellim')
                <div class="panel panel-success">
                @elseif($question->user->role == 'mentor')
                <div class="panel panel-primary">
                 @elseif($question->user->role == 'admin')
                <div class="panel panel-danger">
                @elseif($question->user->role == 'user')               
            <div class="panel panel-default">
            @endif
                <div class="panel-heading">{{$catName->cat_name}}/{{$question->user_username}}</div>
                
                
                <div class="panel-body">
                    <code>{{$question->sual}}</code>
                   <hr>
                </div>
                <hr>
                <div class="capiton">
                @foreach($question->answers as $answer)
                <span>aga</span><br>
                <span>{{$answer->cavab}}</span>

                <hr>
                @endforeach
                <a href="/{{$question->id}}/answer" class="btn btn-default">Cavabla</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop