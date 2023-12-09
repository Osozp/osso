<x-master-layout>
	<main class="bg_gray">
	    <div class="container margin_30">
	        <div class="page_header">
	            <div class="breadcrumbs">
	                <ul>
	                    <li><a href="#">Inicio</a></li>
	                    <li><a href="#">{{$product->category->name}}</a></li>
	                    <li>{{$product->sku}}</li>
	                </ul>
	            </div>
	            <h1>{{$product->title}}</h1>
	        </div>
			<div class="row justify-content-center">
	            <div class="col-lg-8">
	                <div class="owl-carousel owl-theme prod_pics magnific-gallery">
						@foreach ($product->images as $image)
							<div class="item">
								<img src="{{Storage::url($image->url)}}" alt="">
							</div>
						@endforeach
	                </div>
	            </div>
	        </div>
	    </div>
	    
	    <div class="bg_white">
	        <div class="container margin_60_35">
	            <div class="row justify-content-between">
	                <div class="col-lg-6">
	                    <div class="prod_info version_2">
	                        <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
	                        <p><small>SKU: {{$product->sku}}</small><br>{{$product->description}}</p>
	                        {{-- <p>Et phaedrum temporibus per. Antiopam posidonium et est. Eu ius quas modus suavitate, ex sea feugiat laoreet voluptatum. Quo at veritus ancillae complectitur, duo no assum omnes.</p> --}}
	                    </div>
	                </div>
	                <div class="col-lg-5">
	                    <div class="prod_options version_2">
	                        <div class="row">
	                            <label class="col-xl-7 col-lg-5 col-md-6 col-6"><strong>Tallas</strong></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
	                                <div class="custom-select-form">
	                                    <select class="wide">
											@foreach ($product->tags as $item)
												<option value="">{{$item->name}}</option>
											@endforeach
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row mt-3">
	                            <div class="col-lg-7 col-md-6 mb-3">
	                                <div class="price_main">
										<span class="new_price">
											Bs. {{$product->price}}
										</span>
										{{-- <span class="percentage">
											-20%
										</span> 
										<span class="old_price">
											$160.00
										</span> --}}
									</div>
	                            </div>
	                            <div class="col-lg-5 col-md-6 mb-3">
									{{-- <div class="btn_add_to_cart"><a href="https://api.whatsapp.com/send?text=Visita%20el%20blog%20de%20Parzibyte%20en%20https://parzibyte.me/blog" class="btn_1">Quiero Comprarlo</a></div> --}}
	                                <div class="btn_add_to_cart"><a href="https://api.whatsapp.com/send?phone=59169955232&text=Quiero%20comprar%20este%20producto%20{{$path}}" class="btn_1">Quiero Comprarlo</a></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- /row -->
	        </div>
	    </div>
	    <!-- /bg_white -->

	    {{-- <div class="tabs_product bg_white version_2">
	        <div class="container">
	            <ul class="nav nav-tabs" role="tablist">
	                <li class="nav-item">
	                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Description</a>
	                </li>
	                <li class="nav-item">
	                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Reviews</a>
	                </li>
	            </ul>
	        </div>
	    </div> --}}

	    <!-- /tabs_product -->

	    {{-- <div class="tab_content_wrapper">
	        <div class="container">
	            <div class="tab-content" role="tablist">
	                <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
	                    <div class="card-header" role="tab" id="heading-A">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
	                                Description
	                            </a>
	                        </h5>
	                    </div>

	                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
	                        <div class="card-body">
	                            <div class="row justify-content-between">
	                                <div class="col-lg-6">
	                                    <h3>Details</h3>
	                                    <p>Lorem ipsum dolor sit amet, in eleifend <strong>inimicus elaboraret</strong> his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.</p>
	                                    <p>Vis ei ipsum conclusionemque. Te enim suscipit recusabo mea, ne vis mazim aliquando, everti insolens at sit. Cu vel modo unum quaestio, in vide dicta has. Ut his laudem explicari adversarium, nisl <strong>laboramus hendrerit</strong> te his, alia lobortis vis ea.</p>
	                                    <p>Perfecto eleifend sea no, cu audire voluptatibus eam. An alii praesent sit, nobis numquam principes ea eos, cu autem constituto suscipiantur eam. Ex graeci elaboraret pro. Mei te omnis tantas, nobis viderer vivendo ex has.</p>
	                                </div>
	                                <div class="col-lg-5">
	                                    <h3>Specifications</h3>
	                                    <div class="table-responsive">
	                                        <table class="table table-sm table-striped">
	                                            <tbody>
	                                                <tr>
	                                                    <td><strong>Color</strong></td>
	                                                    <td>Blue, Purple</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Size</strong></td>
	                                                    <td>150x100x100</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Weight</strong></td>
	                                                    <td>0.6kg</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Manifacturer</strong></td>
	                                                    <td>Manifacturer</td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                    <!-- /table-responsive -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- /TAB A -->
	                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
	                    <div class="card-header" role="tab" id="heading-B">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
	                                Reviews
	                            </a>
	                        </h5>
	                    </div>
	                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
	                        <div class="card-body">
	                            <div class="row justify-content-between">
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>
	                                            <em>Published 54 minutes ago</em>
	                                        </div>
	                                        <h4>"Commpletely satisfied"</h4>
	                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><i class="icon-star empty"></i><em>4.0/5.0</em></span>
	                                            <em>Published 1 day ago</em>
	                                        </div>
	                                        <h4>"Always the best"</h4>
	                                        <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- /row -->
	                            <div class="row justify-content-between">
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><em>4.5/5.0</em></span>
	                                            <em>Published 3 days ago</em>
	                                        </div>
	                                        <h4>"Outstanding"</h4>
	                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>
	                                            <em>Published 4 days ago</em>
	                                        </div>
	                                        <h4>"Excellent"</h4>
	                                        <p>Sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- /row -->
	                            <p class="text-end"><a href="leave-review.html" class="btn_1">Leave a review</a></p>
	                        </div>
	                        <!-- /card-body -->
	                    </div>
	                    
	                </div>
	                <!-- /tab B -->
	            </div>
	            <!-- /tab-content -->
	        </div>
	        <!-- /container -->
	    </div> --}}
	    <!-- /tab_content_wrapper -->

	    {{-- <div class="bg_white">
	        <div class="container margin_60_35">
	            <div class="main_title">
	                <h2>Related</h2>
	                <span>Products</span>
	                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
	            </div>
	            <div class="owl-carousel owl-theme products_carousel">
	                <div class="item">
	                    <div class="grid_item">
	                        <span class="ribbon new">New</span>
	                        <figure>
	                            <a href="product-detail-1.html">
	                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">
	                            </a>
	                        </figure>
	                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
	                        <a href="product-detail-1.html">
	                            <h3>ACG React Terra</h3>
	                        </a>
	                        <div class="price_box">
	                            <span class="new_price">$110.00</span>
	                        </div>
	                        <ul>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
	                        </ul>
	                    </div>
	                    <!-- /grid_item -->
	                </div>
	                <!-- /item -->
	                <div class="item">
	                    <div class="grid_item">
	                        <span class="ribbon new">New</span>
	                        <figure>
	                            <a href="product-detail-1.html">
	                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5.jpg" alt="">
	                            </a>
	                        </figure>
	                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
	                        <a href="product-detail-1.html">
	                            <h3>Air Zoom Alpha</h3>
	                        </a>
	                        <div class="price_box">
	                            <span class="new_price">$140.00</span>
	                        </div>
	                        <ul>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
	                        </ul>
	                    </div>
	                    <!-- /grid_item -->
	                </div>
	                <!-- /item -->
	                <div class="item">
	                    <div class="grid_item">
	                        <span class="ribbon hot">Hot</span>
	                        <figure>
	                            <a href="product-detail-1.html">
	                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8.jpg" alt="">
	                            </a>
	                        </figure>
	                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
	                        <a href="product-detail-1.html">
	                            <h3>Air Color 720</h3>
	                        </a>
	                        <div class="price_box">
	                            <span class="new_price">$120.00</span>
	                        </div>
	                        <ul>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
	                        </ul>
	                    </div>
	                    <!-- /grid_item -->
	                </div>
	                <!-- /item -->
	                <div class="item">
	                    <div class="grid_item">
	                        <span class="ribbon off">-30%</span>
	                        <figure>
	                            <a href="product-detail-1.html">
	                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/2.jpg" alt="">
	                            </a>
	                        </figure>
	                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
	                        <a href="product-detail-1.html">
	                            <h3>Okwahn II</h3>
	                        </a>
	                        <div class="price_box">
	                            <span class="new_price">$90.00</span>
	                            <span class="old_price">$170.00</span>
	                        </div>
	                        <ul>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
	                        </ul>
	                    </div>
	                    <!-- /grid_item -->
	                </div>
	                <!-- /item -->
	                <div class="item">
	                    <div class="grid_item">
	                        <span class="ribbon off">-50%</span>
	                        <figure>
	                            <a href="product-detail-1.html">
	                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/3.jpg" alt="">
	                            </a>
	                        </figure>
	                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
	                        <a href="product-detail-1.html">
	                            <h3>Air Wildwood ACG</h3>
	                        </a>
	                        <div class="price_box">
	                            <span class="new_price">$75.00</span>
	                            <span class="old_price">$155.00</span>
	                        </div>
	                        <ul>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
	                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
	                        </ul>
	                    </div>
	                    <!-- /grid_item -->
	                </div>
	                <!-- /item -->
	            </div>
	            <!-- /products_carousel -->
	        </div>
	        <!-- /container -->
	    </div> --}}


	    <!-- /bg_white -->

	</main>
</x-master-layout>