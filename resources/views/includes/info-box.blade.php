@if(Session::has('fail'))
	<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ Session::get('fail') }}
	</div>
@endif

@if(Session::has('success'))
	<div class="alert alert-dismissible alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ Session::get('success') }}
	</div>
@endif

@if(count($errors) > 0)
	<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<ul>
			@foreach($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif