@extends('layouts.app')

@section('content')

<div class="col-md-10">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">Suallar</div>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						
					<thead>
						<tr>
							<th>{{$user->username}}</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						
							@foreach($user->question as $question)
							<tr>
							<td>{{$question->sual}}</td>
							<td><a href="/{{$user->id}}/question/{{$question->id}}/edit" class="btn btn-primary">Edit</a></td>
							<td>
							{{ Form::open(['method' => 'DELETE', 'url' => $user->id.'/question/'.$question->id]) }}
								{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
								{{ Form::close() }}
							
							</td>
							</tr>
							@endforeach
						
					</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
@stop