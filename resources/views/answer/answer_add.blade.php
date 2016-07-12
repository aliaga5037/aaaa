@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Cavab Ver</div>
                <div class="panel-body">
                <p>{{$ques->sual}}</p>
                    {!! Form::open(['url' => "/$ques->id/answer"]) !!}
                    
                    <div class="form-group">
                        {!!Form::text('cavab',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::submit('Cavabla',['class'=>'btn btn-primary'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop