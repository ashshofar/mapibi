@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1>Data Chart</h1>
		       	</div>
		       	<div class="card-body">
		       		<a href="{{ route('admin.title.index') }}">
		        		<button class="btn btn-primary">Back</button>
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
		        	<div id="pop-div" style="width:1400"></div>
					<?= $lava->render('GeoChart', 'Popularity', 'pop-div') ?>
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
					            <th>Provinsi</th>
					            <th>Value</th>
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($datas) == 0)
					    	<tr>
					    		<td colspan="5"><center>No Chart</center></td>
					    	</tr>
						@else
							@foreach($datas as $data)
								<tr>
									<td>{{ $data->wilayah }}</td>
									<td>{{ $data->value }}</td>
									<td>
										<a href="{{ route('admin.data.edit', ['data_id' => $data->id]) }}" class="btn btn-xs btn-info">
											Edit Value
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