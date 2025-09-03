@extends('layouts.app')


@section('title', 'المنتجات')


@section('content')


@unless(empty($products))

        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Shop</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- listing Area Start -->
        <div class="category-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-50">
                            <h2>Shop with us</h2>
                            <p>Browse from 230 latest items</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--? Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4 ">
                        <!-- Job Category Listing start -->
                        <div class="category-listing mb-50">
                            <!-- single one -->
                            <div class="single-listing">
                                <!-- Select City items start -->
                                <div class="select-job-items2">
                                    <select name="select2">
                                        <option value="">Category</option>
                                        <option value="">Shat</option>
                                        <option value="">T-shart</option>
                                        <option value="">Pent</option>
                                        <option value="">Dress</option>
                                    </select>
                                </div>
                                <!--  Select City items End-->
                                <!-- Select State items start -->
                                <div class="select-job-items2">
                                    <select name="select3">
                                        <option value="">Type</option>
                                        <option value="">SM</option>
                                        <option value="">LG</option>
                                        <option value="">XL</option>
                                        <option value="">XXL</option>
                                    </select>
                                </div>
                                <!--  Select State items End-->
                                <!-- Select km items start -->
                                <div class="select-job-items2">
                                    <select name="select4">
                                        <option value="">Size</option>
                                        <option value="">1.2ft</option>
                                        <option value="">2.5ft</option>
                                        <option value="">5.2ft</option>
                                        <option value="">3.2ft</option>
                                    </select>
                                </div>
                                <!--  Select km items End-->
                                <!-- Select km items start -->
                                <div class="select-job-items2">
                                    <select name="select5">
                                        <option value="">Color</option>
                                        <option value="">Whit</option>
                                        <option value="">Green</option>
                                        <option value="">Blue</option>
                                        <option value="">Sky Blue</option>
                                        <option value="">Gray</option>
                                    </select>
                                </div>
                                <!--  Select km items End-->
                                <!-- Select km items start -->
                                <div class="select-job-items2">
                                    <select name="select6">
                                        <option value="">Price range</option>
                                        <option value="">$10 to $20</option>
                                        <option value="">$20 to $30</option>
                                        <option value="">$50 to $80</option>
                                        <option value="">$100 to $120</option>
                                        <option value="">$200 to $300</option>
                                        <option value="">$500 to $600</option>
                                    </select>
                                </div>
                                <!--  Select km items End-->
                            </div>
                        </div>
                        <!-- Job Category Listing End -->
                    </div>
                    <!--?  Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8 ">
                        <!--? New Arrival Start -->
                        <div class="new-arrival new-arrival2">
                            <div class="row">
                                   @foreach($products as $product)
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                  
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                             @if($product['on_sale'])
                                                <div class="ribbon sale"><span>Sale</span></div>
                                                @else
                                                <div class="ribbon new"><span>New</span></div>
                                                @endif
                                            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
                                            <div class="favorit-items">
                                                <!-- <span class="flaticon-heart"></span> -->
                                                 @if($product['on_sale'])
                                                  <span class="badge badge-sale">Sale</span>
                                                    @else
                                                        <span class="badge badge-new">New</span>
                                                    @endif

                                                <img src="assets/img/gallery/favorit-card.png" alt="">
                                            </div>
                                        </div>
                                        <div class="popular-caption">
                                         <h3><a href="{{ url('/products/'.$product['id']) }}">{{ $product['name'] }}</a></h3>
                                         <!-- "{{ route('products.show', $product['id']) }}" -->
                                         <div class="rating mb-10">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span>${{ number_format($product['price'], 2) }}</span>


                                            @if($loop->first)
                                            <span class="badge">أول منتج</span>
                                            @endif
                                    </div>
                             
                             </div>
                         
                            </div>
                               @endforeach

 
                                   </div>
                                 @else
                                <p>لا توجد منتجات حالياً.</p>
                                @endunless
<!-- Button -->
<div class="row justify-content-center">
    <div class="room-btn mt-20">
        <a href="catagori.html" class="border-btn">Browse More</a>
    </div>
</div>
</div>
<!--? New Arrival End -->
</div>
</div>
</div>
</div>
<!-- listing-area Area End -->
<!--? Popular Items Start -->
@include('partials.category')
</div>
</div>
<!-- Popular Items End -->


@endsection