@extends('auth.layouts.app')
@section('content')
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="{{asset('logo-polsri.png')}}" width="40%" alt="" class="img-fluid mb-4">
						<div class="form-group mb-3">
							<label  for="Email">Email address</label>
							<input type="text" value=""  class="form-control" id="Email" autofocus >
						</div>
						<div class="form-group mb-4">
							<label  for="Password">Password</label>
							<input type="password" class="form-control" id="Password" placeholder="Password">
						</div>
				
						<button class="btn btn-block btn-primary mb-4">Signin</button>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->
@endsection