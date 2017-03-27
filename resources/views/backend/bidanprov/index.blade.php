@extends('layouts.admin-master')

@section('content')
	
	<div class="col-md-12">
		@include('includes.info-box')
	</div>
	
	
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
					<h1> Data Bidan </h1>
		       	</div>
		    </div>
		</div>
	</div>
	

	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		       		Map Chart
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
					            <th>Penduduk/Provinsi</th>
					            <th>Bidan/Provinsi</th>
					            <th>Anggota IBI/Provinsi</th>
								<th>Sekolah Bidan/Provinsi</th>
					        </tr>
					    </thead>
					    <tbody>
					    @if(count($datas) == 0)
					    	<tr>
					    		<td colspan="5"><center>No Data</center></td>
					    	</tr>
						@else
							@foreach($datas as $data)
								<tr>
									<td>{{ $data->wilayah }}</td>
									<td>{{ $data->penduduk }}</td>
									<td>{{ $data->bidan }}</td>
									<td>{{ $data->anggota }}</td>
									<td>{{ $data->sekolah }}</td>
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