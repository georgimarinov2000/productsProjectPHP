@extends('layouts.app')
@section('content')
<style>
</style>
<div class="container">
	<section>
		<header>
			<h2 style="color:white">Filtered resaults<h2>
		</header>
		<div class="row">
			<div class="4u">
				<section>
					@foreach($products as $product)
					<h3 style="color:white">Product category: {{$product->category->name}}</h3>
					<h3 style="color:white">Product name: {{$product->name}}</h3> 
					<h3 style="color:white"> Product description: {{$product->description}}<h3>
					<h3 style="color:white">Product:</h3> <img src="{{$product->image}}" width="74" height="74" alt="no image"> <br> 
					<hr>	
					@endforeach
				</section>
			</div>
		</div>
	</section>
</div>
@endsection