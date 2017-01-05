@extends('layouts.master')
@section('content')
<div classs="row">
	<div class="col-md-12 ">
		
		<div class="col-md-4 col-md-offset-4">
		<h1>shipping info</h1>

		<form method="POST" action="{{route('ship.store')}}" enctype="multipart/form-data">
			{{csrf_field()}}
				<div class="form-group">
					<label>country</label>
					<input type="text" id="country" name="country" class="form-control">
				</div>
				<div class="form-group">
					<label>city</label>
					<input type="text" id="password" name="city" class="form-control">
				</div>
				
				
				<div class="form-group">
					<label>phone no</label>
					<input type="text" id="password" name="pno" class="form-control">
				</div>
				
				<button type="submit" name="btn" id="btn">submit</button>
		</form>
	</div>

		

		
	</div>
</div>
@endsection