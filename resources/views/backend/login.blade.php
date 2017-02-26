@extends('layouts.login-master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <h1 class="text-center login-title">&nbsp;</h1>
            @include('includes.info-box')
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">

                    

                <form class="form-signin" action="{{ route('admin.login.post') }}" method="post">
                <input type="text" class="form-control" placeholder="Email" autofocus name="email" id="email">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Login</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token" />
                <label class="checkbox pull-left">
                    &nbsp;
                </label>
                <a href="#" class="pull-right need-help">&nbsp;</a><span class="clearfix"></span>
                </form>
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
