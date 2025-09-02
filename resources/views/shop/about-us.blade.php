@extends('layouts.app')


@section('title', $title ?? 'من نحن')


@section('content')
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">about</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>



  <div class="about-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-center pt-10">
                            
                            <h2>{{ $title }}</h2>
                            <p class="pera"> {{ $description }}.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-img pb-bottom">
                            <img src="assets/img/gallery/about1.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-center pt-10">
                            <h2>Journey start from</h2>
                            <p class="pera">We aim to become the go-to fashion destination in the Arab world, bringing elegance and confidence to every wardrobe, one outfit at a time.       </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-img pb-bottom">
                            <img src="assets/img/gallery/about2.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                    @php
                    $year = date('Y');
                    @endphp

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-center pt-10">
                            <h2>2020</h2>
                        {{-- الحذر: {!! !!} يعرض HTML خام ويجب الانتباه للأمن --}}
                         <div class="raw-html">{!! $rawHtml !!}</div>
                            <p class="pera">Copyright  &copy; {{ $year }} My E-commerce Store.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('partials.category')



@endsection