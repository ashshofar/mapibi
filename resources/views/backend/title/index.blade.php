@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>Chart</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.title.create') }}">
		        		<button class="btn btn-primary">Add Chart</button>
		        	</a>

		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		List
		       	</div>
		        <div class="card-body">
		        	<table class="datatable table table-striped primary" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>Title</th>
					            <th>Description</th>
					            <th>Chart</th>
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($titles) == 0)
					    	<tr>
					    		<td colspan="5"><center>No Chart</center></td>
					    	</tr>
						@else
							@foreach($titles as $title)
								<tr>
									<td>{{ $title->title }}</td>
									<td>{{ $title->description }}</td>
									<td>
										<a href="{{ route('admin.data.index', ['uevent_id' => $title->id]) }}" class="btn btn-xs btn-primary">
											View Chart
										</a>
									</td>
									<td>
										<a href="{{ route('admin.title.edit', ['uevent_id' => $title->id]) }}" class="btn btn-xs btn-info">
											Edit
										</a>
										<a href="{{ route('admin.title.delete', ['uevent_id' => $title->id]) }}" class="btn btn-xs btn-danger">
											Delete
										</a>
									</td>
								</tr>
							@endforeach
						@endif
					    </tbody>
					</table>
				</div>
		    </div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		var token = "{{ Session::token() }}";
	</script>

@endsection