@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sual Ver</div>
                <div class="panel-body">
                    {!! Form::open(['url' => $category->id."/question"]) !!}
                    
                    <div class="form-group">
                        {!!Form::text('sual',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::submit('Click Me!',['class'=>'btn btn-primary'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop