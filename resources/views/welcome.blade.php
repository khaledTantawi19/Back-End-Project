@extends('layout.main')


@section('title', 'Cars')


@section('content')

    <!-- start slider -->
    <div id="cars-sliders" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/Merc/2021-mercedes-amg-gt-stealth-edition.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="imgs/Merc/426286-mercedes-classe-e-2021-au-tour-du-coupe-et-du-cabriolet.jpg" class="d-block w-100"
                    alt="..." />
            </div>
            <div class="carousel-item">
                <img src="imgs/Merc/MERCEDES-BENZ_C-Class-2021_main.jpg" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cars-sliders" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cars-sliders" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- start div have some of cars -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="imgs/BMW/984.jpg" alt="" srcset=""
                    class="w-100 d-flex justify-content-center mt-5 hover-back-ground" />
                <p class="mt-3 fs-5 TheBest-par">The Best</p>
                <h2 class="gray">New For BMW</h2>
                <p class="gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                    corrupti neque perspiciatis iste quidem recusandae cumque reiciendis
                    dolorem, doloremque soluta minus eum tempore ducimus ex libero
                    obcaecati veritatis? Necessitatibus, aut.
                </p>
                <button class="p-2 gray">Shop Now</button>
            </div>
            <div class="col-sm-12 col-md-6">
                <img src="imgs/BMW/1100111601612174972.jpg" alt="" srcset="" class="mt-5" />
                <img src="imgs/BMW/maxresdefault.jpg" alt="" srcset="" class="mt-5 w-100" />
            </div>
        </div>
    </div>

    <!-- Start Feature item -->
    <div class="row mt-4">
        <div class="col-5">
            <hr />
        </div>
        <div class="col-2 d-flex justify-content-center">
            <p class="fs-3">Featured Items</p>
        </div>
        <div class="col-5">
            <hr />
        </div>
    </div>
    <!-- Links in Feature items -->
    <div class="row">
        <div class="col-12 d-flex justify-content-center" id="feature-Links">
            <a href="" class="text-decoration-none px-3 mt-3 mb-2 text-black feature-link re-active">All</a>
            <a href="" class="text-decoration-none px-3 mt-3 mb-2 text-black feature-link">Mercedes</a>
            <a href="" class="text-decoration-none px-3 mt-3 mb-2 text-black feature-link">BMW</a>
        </div>
    </div>
    <!-- Feature Images -->
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-3 mt-5">
                    <div class="carousel">
                        <img src="{{url('storage/'. $blog->image )}}" alt="" srcset="" class="w-100" />
                        <p class="price-of-cars">{{$blog->price}}</p>
                    </div>
                    <p class="fs-4">{{$blog->title}}</p>
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
            {{-- <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            </div> --}}
        </div>
    </div>

    <!-- start the offer -->
    <div class="row mt-5">
        <div class="col-sm-12 col-md-6 p-0">
            <img src="imgs/BMW/offer.jpg" class="w-100" alt="" srcset="" />
        </div>
        <div class="col-sm-12 col-md-6 p-0">
            <img src="imgs/Merc/offer.jpg" class="w-100 h-100" alt="" srcset="" />
        </div>
    </div>

    <!-- Trending items -->
    <div class="row mt-4">
        <div class="col-5">
            <hr />
        </div>
        <div class="col-2 d-flex justify-content-center">
            <p class="fs-3">Trending Items</p>
        </div>
        <div class="col-5">
            <hr />
        </div>
    </div>

    <!-- Trending images -->
    <div class="container">
        <div class="row">
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
            <div class="col-3 mt-5">
                <div class="carousel">
                    <img src="imgs/BMW/BMW-i_Vision_Dynamics.jpg" alt="" srcset="" class="w-100" />
                    <p class="price-of-cars">$500,000</p>
                </div>
                <p class="fs-4">The Best BMW</p>
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
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="btn-load-more">LOAD MORE</button>
    </div>

    <!-- Feed back of clients -->
    <div class="row mt-5">
        <div class="col-12 p-0">
            <img src="imgs/Merc/feedback.png" class="w-100" alt="" srcset="" />
        </div>
    </div>

    <!-- lates Blog -->
    <div class="row mt-4">
        <div class="col-5">
            <hr />
        </div>
        <div class="col-2 d-flex justify-content-center">
            <p class="fs-3">Lates Blog</p>
        </div>
        <div class="col-5">
            <hr />
        </div>
    </div>

    <!-- Some Of Blogs -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="imgs/BMW/984.jpg" alt="" srcset=""
                    class="w-100 d-flex justify-content-center mt-5 hover-back-ground" />
                <p class="mt-3 fs-5 TheBest-par">The Best</p>
                <h2 class="gray">New For BMW</h2>
                <p class="gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                    corrupti neque perspiciatis iste quidem recusandae cumque reiciendis
                    dolorem, doloremque soluta minus eum tempore ducimus ex libero
                    obcaecati veritatis? Necessitatibus, aut.
                </p>
                <button class="p-2 px-5 bg-white">Shop Now</button>
            </div>
            <div class="col-4">
                <img src="imgs/BMW/984.jpg" alt="" srcset=""
                    class="w-100 d-flex justify-content-center mt-5 hover-back-ground" />
                <p class="mt-3 fs-5 TheBest-par">The Best</p>
                <h2 class="gray">New For BMW</h2>
                <p class="gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                    corrupti neque perspiciatis iste quidem recusandae cumque reiciendis
                    dolorem, doloremque soluta minus eum tempore ducimus ex libero
                    obcaecati veritatis? Necessitatibus, aut.
                </p>
                <button class="p-2 px-5 bg-white">Shop Now</button>
            </div>
            <div class="col-4">
                <img src="imgs/BMW/984.jpg" alt="" srcset=""
                    class="w-100 d-flex justify-content-center mt-5 hover-back-ground" />
                <p class="mt-3 fs-5 TheBest-par">The Best</p>
                <h2 class="gray">New For BMW</h2>
                <p class="gray">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                    corrupti neque perspiciatis iste quidem recusandae cumque reiciendis
                    dolorem, doloremque soluta minus eum tempore ducimus ex libero
                    obcaecati veritatis? Necessitatibus, aut.
                </p>
                <button class="p-2 px-5 bg-white">Shop Now</button>
            </div>
        </div>
    </div>
@endsection
