@extends('layouts.user_app')
@section('content')
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
		  <h1 class="h3 mb-0 text-gray-800">Profile Settings</h1>
		</div>

		<div class="row">

		  <div class="col-lg-6">

			<!-- Basic Card Example -->
			<div class="card shadow mb-4">
			  	<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Update Details</h6>
			  	</div>

				@if (session("mobno_exist"))
				  	<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{session("mobno_exist")}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				  
				<div class="card-body">
					<form action="{{ route('user.update') }}" method="POST">
						@method("PUT")
						@csrf
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
							  <input type="email" class="form-control" id="inputEmail3" value="{{ $user->email }}" disabled>
							</div>
						  </div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="displayName" value="{{ $user->displayName }}">
							</div>
						  </div>
						
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Mobile No.</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" name="phoneNumber" value="{{ $user->phoneNumber }}">
							</div>
						  </div>
						<div class="form-group row">
						  <div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Save</button>
						  </div>
						</div>
					  </form>
				</div>
			</div>

		  </div>

		 

		</div>

	  </div>
	<!-- /.container-fluid -->

@endsection