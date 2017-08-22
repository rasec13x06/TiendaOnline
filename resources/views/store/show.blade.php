@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>  Detalles: </h1>
	</div>
	
	
	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->image }}" width="250">
			</div>
		</div>

		<div class="col-md-6">
			<div class="product-block">
				<h2>{{ $product->name }}</h2><br>
				<div class="product-info panel">
					<p>{{ $product->description}}</p>
					<h3><span class="label label-success">Precio: Bs.{{ number_format($product->price,2) }}</span></h3><br>
					<p>
						<a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug) }}"> Comprar  <i class="fa fa-cart-plus"></i></a>
					</p><br>
					<p>
						<a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-chevron-circle-left"></i>  Regresar</a>
					</p>
				</div>
			</div>
		</div>
		
	</div>

</div>
<br>
@stop