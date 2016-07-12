@extends('layouts.admin')
@section('content')
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Sual Dəyiş</div>
                <div class="panel-body">
                    {!! Form::open(['url' => "/user/".$user->id."/question/".$ques->id , 'method' => 'PATCH']) !!}
                    
                    <div class="form-group">
                        {!!Form::text('sual',$ques->sual,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::submit('Click Me!',['class'=>'btn btn-primary'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@stop