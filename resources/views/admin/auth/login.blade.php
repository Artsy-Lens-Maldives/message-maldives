@extends('layouts.admin-blank')

@section('title', 'Admin Login Page')

@section('content')
<!-- Preloader -->
<div class="preloader">
	<div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
	<div class="login-box login-sidebar">
		<div class="white-box">
			<form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

				<a href="javascript:void(0)" class="text-center db"><img src="/plugins/images/admin-logo-dark.png" alt="Home" /><br/><img src="/plugins/images/admin-text-dark.png" alt="Home" /></a>  
				<div class="form-group m-t-40">
					<div class="col-xs-12">
						<input class="form-control" type="email" required="" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<input class="form-control" type="password" required="" name="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<div class="checkbox checkbox-primary pull-left p-t-0">
							<input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label for="checkbox-signup"> Remember me </label>
						</div>
					</div>
				</div>
				<div class="form-group text-center m-t-20">
					<div class="col-xs-12">
						<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
						<div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
					</div>
				</div>
				<div class="form-group m-b-0">
					<div class="col-sm-12 text-center">
						<p>Don't have an account? <a href="{{ url('admin/register') }}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection