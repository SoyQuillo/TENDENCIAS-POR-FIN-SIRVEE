@extends('layouts.app')

@section('title','Create Customer')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-secondary">
							<h3>@yield('title')</h3>
						</div>
						<form method="POST" action="{{ route('customers.store') }}">
							@csrf
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Name <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="name" placeholder="Example, John" autocomplete="off" value="{{ old('name') }}">
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Email <strong style="color:red;">(*)</strong></label>
                                        	<div class="form-group label-floating">
                                        	    <div style="display:flex;">
											        <input type="email" class="form-control" name="email" placeholder="Example, john@example.com" autocomplete="off" value="{{ old('email') }}">
                                        	    </div>
											</div>
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Address <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="address" placeholder="Example, Main St #123" autocomplete="off" value="{{ old('address') }}">
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Phone <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="phone" placeholder="Example, 123456789" autocomplete="off" value="{{ old('phone') }}">
										</div>
									</div>
								</div>
								<input type="hidden" class="form-control" name="registerby" value="{{ Auth::user()->id }}">
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-primary btn-block btn-flat">Create</button>
									</div>
									<div class="col-lg-2 col-xs-4">
										<a href="{{ route('customers.index') }}" class="btn btn-danger btn-block btn-flat">Back</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
