@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<!-- [ Pre-loader ] start -->

<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->

<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->

<!-- [ Header ] end -->



<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Halaman Ubah Password</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{route('beranda.index')}}"><i class="feather icon-home"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ basic-table ] start -->
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">
						<h5>Ubah Password</h5>
					</div>
					<div class="card-body">
						<form method="POST" action="{{ route('profile.password') }}">
							@method('PUT')
							@csrf
							
							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										Update Password
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
	$(document).ready(function() {
		$('.show_confirm').on('click', function(event) {
			event.preventDefault();
			const url = $(this).attr('href');
			swal({
				title: 'Are you sure?',
				text: 'This record and it`s details will be permanantly deleted!',
				icon: 'warning',
				buttons: ["Cancel", "Yes!"],
			}).then(function(value) {
				if (value) {
					window.location.href = url;
				}
			});
		});
		$('#example').DataTable();
	});
</script>
@endsection