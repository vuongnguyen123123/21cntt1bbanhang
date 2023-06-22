    @extends('layouts.master')
    @section('css')
    <title>Trang Chủ </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="/source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="/source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="/source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="/source/assets/dest/css/style.css">
	<link rel="stylesheet" href="/source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="/source/assets/dest/css/huong-style.css">
    @endsection
{{-- hiển thị --}}
{{-- ////////////////////////////////////////// --}}
    @section('content')
    <div class="rev-slider">
        <div class="fullwidthbanner-container">
                        <div class="fullwidthbanner">
                            <div class="bannercontainer" >
                            <div class="banner" >
                                    <ul>
                                        <!-- THE FIRST SLIDE -->
                                        @foreach ($slides as $slide)
                                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="/source/image/slide/{{$slide->image}}" data-src="/source/image/slide/{{$slide->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/source/image/slide/{{$slide->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; filter: grayscale(40%);">
                                                            </div>
                                            </div>
        
                                        </li>
                                        @endforeach
                                  
                                    </ul>
                                </div>
                            </div>
    
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                    <!--slider-->
        </div>
        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="beta-products-list">
                                <h4>New Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">{{count($new_products)}} món</p>
                                    <div class="clearfix"></div>
                                </div>
                               @php
                                   $stt = 0;
                               @endphp
                                <div class="row">
                                    @isset($new_products)
                                  
                                    @foreach ($new_products as $item)
                                    @php
                                    $stt++;
                                @endphp
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            @if ($item ->promotion_price !=0)
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Sale</div>
                                            </div>
                                            @else 
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">New</div>
                                            </div>
                                                
                                            @endif
    
                                            <div class="single-item-header">
                                                <a href="{{route('product',['id'=>$item->id]) }}"><img src="/source/image/product/{{$item ->image}}" alt="{{$item ->image}}" width="270px" height="320px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$item -> name}} </p>
                                                <p class="single-item-price">
                                                    @if ($item ->promotion_price !=0)
                                    <p class="single-item-price">
                                    <span class="flash-del">{{number_format($item -> unit_price)}}</span>
                                    <span class="flash-sale">{{number_format($item -> promotion_price)}}</span>
                                </p>
                                    @else
                                    <p class="single-item-price">
                                        <span>{{number_format($item -> unit_price)}}</span>
                                    </p>
                                    @endif
                                                   
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('banhang.addToCart',$item ->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('product',['id'=>$item->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($stt % 4==0)
                                        <div class="space50">&nbsp;</div>
                                    @endif
                                    @endforeach
                                    @endisset
                                    {{-- @foreach ($Discountproducts as $item)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
    
                                            <div class="single-item-header">
                                                <a href="{{route('product',['id'=>$item->id]) }}"><img src="/source/image/product/{{$item ->image}}" alt="{{$item ->image}}" width="270px" height="320px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$item -> name}} </p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">{{$item -> unit_price}}</span>
                                                    <span class="flash-sale">{{$item -> promotion_price}}</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('product',['id'=>$item->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach --}}
                                   
                                    
                            </div> <!-- .beta-products-list -->
    
                            <div class="space50">&nbsp;</div>
    
                            <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">{{count($products)}} món</p>
                                    <div class="clearfix"></div>
                                </div>
                                @php
                                    $stt1= 0
                                @endphp
                                <div class="row">
                                    @foreach ($best_product as $product)
                                    @php
                                        $stt1++;
                                    @endphp
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            @if ($product ->promotion_price !=0)
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Sale</div>
                                        </div>
                                        @elseif($product ->new ==1) 
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon sale">New</div>
                                        </div>
                                                
                                            @endif
                                            <div class="single-item-header">
                                                <a href="{{route('product',['id'=>$product->id]) }}"><img src="/source/image/product/{{$product ->image}}" alt="{{$product ->image}}" width="270px" height="320px"></a>

                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$product -> name}}</p>
                                                @if ($product ->promotion_price !=0)
                                    <p class="single-item-price">
                                    <span class="flash-del">{{number_format($product -> unit_price)}}</span>
                                    <span class="flash-sale">{{number_format($product -> promotion_price)}}</span>
                                </p>
                                    @else
                                    <p class="single-item-price">
                                        <span>{{number_format($product -> unit_price)}}</span>
                                    </p>
                                    @endif
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('product',['id'=>$product->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($stt1 % 4 == 0)
                            <div class="space50">&nbsp;</div>
                                        
                                    @endif
                                    @endforeach
                                    
                                    
                                   
                                </div>
                            </div> <!-- .beta-products-list -->
                        </div>
                    </div> <!-- end section with sidebar and main content -->
    
                
                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
        </div>
    @endsection
{{-- /////////////////////////////////// --}}
{{-- footer --}}
    @section('js')
    
    <script src="/source/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
    
    @endsection
    