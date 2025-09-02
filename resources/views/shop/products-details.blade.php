      @extends('layouts.app')


@section('title', 'تفاصيل المنتج')


@section('content')
      
      
      <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/products">shop</a></li> 
                                <li class="breadcrumb-item"><a href="#">Product Details</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
                </div>
                <!-- breadcrumb End-->
                <!--?  Details start -->
                <div class="directory-details pt-padding">
                <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="small-tittle mb-20">
                            <h2>Description</h2>
                        </div>
                        <div class="directory-cap mb-40">
                            <p>{{ $product['description'] }}.</p>
                        </div>
                 


                     <div class="gallery-img">
                            <div class="row">
                                <div class="col-lg-6">
                                   @if($product['on_sale'])
                                                <div class="ribbon sale"><span>Sale</span></div>
                                                @else
                                                <div class="ribbon new"><span>New</span></div>
                                                @endif
                                            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
                                             <div class="popular-caption">
                                         <h3><a href="{{ url('/product/'.$product['id']) }}">{{ $product['name'] }}</a></h3>
                                         <div class="rating mb-10">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span>${{ number_format($product['price'], 2) }}</span>
                                </div>
                              
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <!--  Details End -->
          @endsection