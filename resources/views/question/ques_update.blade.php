@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sual Dəyiş</div>
                <div class="panel-body">
                    {!! Form::open(['url' => $id."/question/".$ques->id , 'method' => 'PATCH']) !!}
                    
                    <div class="form-group">
                        {!!Form::text('sual',$ques->sual,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::submit('Dəyiş',['class'=>'btn btn-primary'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop