@extends('layouts.frontend-master')

@section('content')
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		List Map Chart
		       	</div>
		        <div class="card-body">
		        	<table class="datatable table table-striped primary" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>Nama</th>
					            <th>Deskripsi</th>
					            <th>Chart</th>
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
										<a href="{{ route('frontend.data', ['uevent_id' => $title->id]) }}" class="btn btn-xs btn-info">
											Lihat Chart
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