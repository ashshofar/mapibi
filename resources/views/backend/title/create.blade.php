@extends('layouts.admin-master')

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Add Chart
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.title.post.create') }}" method="post">
					  	<div class=" {{ $errors->has('title') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Title</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="title" name="title" value="{{ Request::old('title') }}">
					        </div>
					    </div>
					    <div class=" {{ $errors->has('description') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">Description</label>
					        <div class="col-md-10">
					          <textarea class="form-control" id="description" name="description" rows="10">{{ Request::old('description') }}</textarea>
					        </div>
					    </div>
					    <div class="form-footer">
					    <div class="form-group">
					      	<div class="col-md-10 col-md-offset-2">
						        <button type="submit" class="btn btn-primary">Save</button>
						        <a href="{{ route('admin.title.index') }}">
						        	<button type="button" class="btn btn-default">Cancel</button>
						        </a>
						        <input type="hidden" value="{{ Session::token() }}" name="_token" />
					      	</div>
					    </div>
					  </div>
					</form>
		        </div>
		      </div>
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