@extends('layouts.admin-master')

@section('content')
	<div class="row">
		<div class="col-md-12">
		    <div class="card">
		        <div class="card-header">
		          Edit Value {{ $datas->wilayah }}
		        </div>
		        <div class="card-body">
		        	<div class="col-lg-10 col-md-offset-2">
						@include('includes.info-box')
					</div>
		        	<form class="form form-horizontal" action="{{ route('admin.data.post.edit') }}" method="post">
					  	<div class=" {{ $errors->has('value') ? 'form-group has-error' : 'form-group'}} ">
					        <label class="col-md-2 control-label">{{ $datas->wilayah }}</label>
					        <div class="col-md-10">
					          <input type="text" class="form-control" placeholder="" id="value" name="value" value="{{ Request::old('value') ? Request::old('value') : isset($datas) ? $datas->value : '' }}">
					        </div>
					    </div>
					    
					    <div class="form-footer">
					    <div class="form-group">
					      <div class="col-md-10 col-md-offset-2">
					        <button type="submit" class="btn btn-primary">Save</button>
					        <a href="{{ route('admin.data.index', ['title_id' => $datas->title_id]) }}">
					        	<button type="button" class="btn btn-default">Cancel</button>
					        </a>
					        <input type="hidden" value="{{ Session::token() }}" name="_token" />
					        <input type="hidden" value="{{ $datas->id }}" name="data_id">
					        <input type="hidden" value="{{ $datas->title_id }}" name="title_id">
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