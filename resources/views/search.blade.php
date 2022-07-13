@extends('layout.main')


@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-3 mt-5">
                    <div class="carousel">
                        <img src="{{ url('storage/' . $product->image) }}" alt="" srcset="" class="w-100" />
                        <p class="price-of-cars">{{ $product->price }}</p>
                    </div>
                    <p class="fs-4">{{ $product->title }}</p>
                    <!-- start star rate from font awsome -->
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <!--  end star rate from font awsome -->
                    <!-- start reacte for item (icons from font awsome) -->
                    <i class="fa fa-heart img-icons rounded-circle mt-2" aria-hidden="true"></i>
                    <i class="fa fa-shopping-cart img-icons rounded-circle mt-2" aria-hidden="true"></i>
                    <i class="fa fa-share-alt img-icons rounded-circle mt-2" aria-hidden="true"></i>
                </div>
            @endforeach

        </div>
    </div>
@endsection
