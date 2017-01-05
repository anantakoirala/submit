@extends('layouts.app')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">users</h1>
                    </div>
                    <div class="row">

                    	<form method="POST" action="{{route('categories.store')}}">
                    		{{!!csrf_field()!!}}
                    		<label>categories</label>
                    		<input type="text" name="name">
                    		<input type="submit" name="btn" value="create">
                    	</form>
                    	</div>
   
@endsection