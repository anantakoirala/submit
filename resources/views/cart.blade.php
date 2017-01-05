@extends('layouts.master')
@section('content')
<div classs="row">
	<div class="col-md-12 ">
		<h1>products</h1>

		<table class="table table-hover">
			<thead>
				<tr>
					<th> product name</th>
					<th> product quantity</th>
					<th> product price</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cartitem as $c)
				<tr>
					<td>{{$c->name}}</td>
					<td >{{$c->qty}}</td>
					<td>${{$c->price}}</td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td>total products:{{Cart::count()}}</td>
					<td>Grand Total= ${{Cart::total()}}</td>
				</tr>
			</tbody>

		</table>
		<a href="{{URL::to('/checkout')}}" class="button">checkout</a>
	</div>
</div>
@endsection