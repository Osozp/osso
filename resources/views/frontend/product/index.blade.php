<x-master-layout>
    <main>
		<div class="top_banner">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
				<div class="container">
					<div class="breadcrumbs">
						<ul>
							<li><a href="#">Inicio</a></li>
							<li><a href="#">Categoria</a></li>
							<li>{{$category->name}}</li>
						</ul>
					</div>
					<h1>Productos - {{$category->name}}</h1>
				</div>
			</div>
			<img src="img/bg_cat_shoes.jpg" class="img-fluid" alt="">
		</div>
		<!-- /top_banner -->
			<div class="container margin_30">
			<div class="row small-gutters">		
                    @foreach ($products as $product)
					<div class="col-6 col-md-4 col-xl-3">				
                        <a href="{{route('producto.show',$product)}}">
							
								<div class="grid_item">
									<figure>
											@php
												$int = 0;
											@endphp
											@foreach ($product->images as $image)
												@if ($int <= 1)
														<img class="img-fluid lazy" src="{{Storage::url($image->url)}}">
													@php
														$int = $int+1;
													@endphp
												@endif  
											@endforeach
									</figure>
									<a href="{{route('producto.show',$product)}}">
										<h3>{{$product->title}}</h3>
									</a>
									<div class="price_box">
										<span class="new_price">Bs. {{$product->price}}</span>
									
									</div>
								</div>
							
						</a>
					</div>
                    @endforeach
					<!-- /grid_item -->
				
				<!-- /col -->		
			</div>
			<!-- /row -->

			<div class="mt-4">
				{{$products->links('partials.paginate')}}
			</div>
		</div>
		<!-- /container -->
	</main>
</x-master-layout>