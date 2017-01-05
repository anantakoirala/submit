@extends('layouts.master')
@section('title')
index
@endsection
@section('content')
@foreach($product->chunk(3) as $productchunk)
<div class="row">
    @foreach($productchunk as $products)
     <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/images/{{$products->image}}" alt="..." style="max-height: 150px" class="image-responsive">
      <div class="caption">
        <h3>{{$products->title}}</h3>
        <p class="description">{{$products->description}}</p>
        <div class="pull-left price">${{$products->price}}</div>
        <div class="clearfix"> <a href="{{route('cart.edit',$products->id)}}" class="btn btn-success pull-right" role="button">Add to cart</a></div>
      </div>
    </div>
  </div>
    @endforeach
 </div>
@endforeach

@endsection