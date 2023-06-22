@extends('layouts.master')
@section('css')
<title>BetaDesign &mdash; Product</title>
<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/source/assets/dest/css/font-awesome.min.css">
<link rel="stylesheet" href="/source/assets/dest/vendors/colorbox/example3/colorbox.css">
<link rel="stylesheet" title="style" href="/source/assets/dest/css/style.css">
<link rel="stylesheet" href="/source/assets/dest/css/animate.css">
<link rel="stylesheet" title="style" href="/source/assets/dest/css/huong-style.css">
@endsection
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Product</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('/')}}">Home</a> / <span>Product</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="/source/image/product/{{$product['image']}}" alt="{{$product['image']}}" width="270px" height="320px">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">{{$product['name']}}</p>
                            
                                
                                @if ($product ->promotion_price !=0)
                                <p class="single-item-price">
                                <span class="flash-del">{{number_format($product -> promotion_price)}}</span>
                                <span class="flash-sale">{{number_format($product -> promotion_price)}}</span>
                            </p>
                                @else
                                <p class="single-item-price">
                                    <span>{{number_format($product -> promotion_price)}}</span>
                                </p>
                                @endif
                                
                    
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>{{$product['description']}}.</p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <p>Options:</p>
                        <div class="single-item-options">
                            <select class="wc-select" name="size">
                                <option>Size</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                          
                            <select class="wc-select" name="qty">
                                <option>Qty</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a class="add-to-cart" href="{{route('banhang.addToCart',$product ->id)}}"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Description</a></li>
                        <li><a href="#tab-reviews">Reviews (0)</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{{$product['description']}} </p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Related Products</h4>

                    <div class="row">
                        @foreach ($related as $item)
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="{{route('product',['id'=>$item->id]) }}"><img src="/source/image/product/{{$item->image}}" alt="{{$item->image}}" width="270px" height="320px"></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$item->name}}</p>
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
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="{{route('banhang.addToCart',$item ->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{route('product',['id'=>$item->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Best Sellers</h3>
                    <div class="widget-body">
                        @foreach ($best_product as $item)
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{route('product',['id'=>$item->id]) }}"><img src="/source/image/product/{{$item->image}}" alt=""></a>
                                <div class="media-body">
                                    {{$item->name}}
                                    <span class="beta-sales-price">{{number_format($item -> unit_price)}}</span>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                        
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">New Products</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($new_product as $item)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{route('product',['id'=>$item->id]) }}"><img src="/source/image/product/{{$item->image}}" alt="{{$item->image}}"></a>
                                <div class="media-body">
                                   {{$item->name}}
                                    <span class="beta-sales-price">{{number_format($item -> unit_price)}}</span>
                                </div>
                            </div>
                            @endforeach
                            
                           
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->

@endsection

@section('js')
    <!--customjs-->
	<script type="text/javascript">
        $(function() {
            // this will get the full URL at the address bar
            var url = window.location.href;
    
            // passes on every "a" tag
            $(".main-menu a").each(function() {
                // checks if its the same on the address bar
                if (url == (this.href)) {
                    $(this).closest("li").addClass("active");
                    $(this).parents('li').addClass('parent-active');
                }
            });
        });
    
    
    </script>
    <script>
         jQuery(document).ready(function($) {
                    'use strict';
    
    // color box
    
    //color
          jQuery('#style-selector').animate({
          left: '-213px'
        });
    
        jQuery('#style-selector a.close').click(function(e){
          e.preventDefault();
          var div = jQuery('#style-selector');
          if (div.css('left') === '-213px') {
            jQuery('#style-selector').animate({
              left: '0'
            });
            jQuery(this).removeClass('icon-angle-left');
            jQuery(this).addClass('icon-angle-right');
          } else {
            jQuery('#style-selector').animate({
              left: '-213px'
            });
            jQuery(this).removeClass('icon-angle-right');
            jQuery(this).addClass('icon-angle-left');
          }
        });
                    });
        </script>
@endsection
	


	

