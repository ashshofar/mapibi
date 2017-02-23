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
		        	<div id="pop-div" style="width:800px;border:1px solid black"></div>
					<?= $lava->render('GeoChart', 'Popularity', 'pop-div') ?>
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