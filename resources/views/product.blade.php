@extends('layouts.app')
@section('content')
<div id="page-wrapper">
           <div classs="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>create product</h1>

		<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
			{{csrf_field()}}
				<div class="form-group">
					<label>name</label>
					<input type="text" id="email" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>title</label>
					<input type="text" id="password" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>category</label>
					<select name="categories_id" class="form-control">
						@foreach($category as $c)
						<option value="{{$c->id}}">{{$c->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>discription</label>
					<input type="text" id="password" name="descriptioin" class="form-control">
				</div>
				<div class="form-group">
					<label>price</label>
					<input type="text" id="password" name="price" class="form-control">
				</div>
				<div class="form-group">
					<label>image</label>
					<input type="file" id="password" name="image" class="form-control">
				</div>
				<button type="submit" name="btn" id="btn">submit</button>
		</form>
	</div>
</div>
                    	</div
   
@endsection