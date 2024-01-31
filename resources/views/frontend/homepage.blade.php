@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5">
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('frontend/img/hero/banner.png') }}" class="d-block w-100" alt="banner">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('frontend/img/hero/Banner-1.jpg') }}" class="d-block w-100" alt="banner">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('frontend/img/hero/Banner-2.jpg') }}" class="d-block w-100" alt="banner">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('frontend/img/hero/Banner-3.jpg') }}" class="d-block w-100" alt="banner">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('frontend/img/hero/Banner-4.jpg') }}" class="d-block w-100" alt="banner">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
      <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            @foreach($menu_categories as $menu_category)
              <div class="col-lg-3">
                <div
                  class="categories__item set-bg"
                  data-setbg="{{ $menu_category->photo->getUrl() }}"
                >
                  <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></h5>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Featured Product</h2>
            </div>
          </div>
        </div>
        <div class="row featured__filter" id="product-list">
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active banner__pic">
                  <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" class="d-block w-100" alt="...HAPPCHOP">
                </div>
                <div class="carousel-item ">
                  <img src="{{ asset('frontend/img/banner/banner-3.jpg') }}" class="d-block w-100" alt="HAPPCHOP">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/img/banner/banner-4.jpg') }}" class="d-block w-100" alt="...HAPPCHOP">
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active banner__pic">
                  <img src="{{ asset('frontend/img/banner/banner-2.jpg') }}" class="d-block w-100" alt="HAPPCHOP">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/img/banner/banner-5.jpg') }}" class="d-block w-100" alt="HAPPCHOP">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/img/banner/banner-6.jpg') }}" class="d-block w-100" alt="HAPPCHOP">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->
@endsection
