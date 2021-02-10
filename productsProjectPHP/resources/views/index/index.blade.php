@extends('layouts.app')

@section('content')
<style>
</style>
<div class="container">
	<section>
		<header>
			<h2 style="color:white">{{$text}}<h2>
		</header>
		<div class="row">
			<div class="4u">
				<section>
				<form action="/search" method="get">
				<select name="searchOption" id="searchOption">
                        <option value="product">Product</option>
                        <option value="category">Category</option>
                    </select>
				<input type="text" id="searchTextInput"  name="searchTextInput" style="float: right" placeholder="Search here..." />
				<input type="submit" id="submitSearch"/>
				</form>
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