@section('title', 'Home')

<div>

    <style>
        ul#horizontal-list {
            min-width: 696px;
            list-style: none;
            padding-top: 20px;
        }
        ul#horizontal-list li {
            display: inline;
        }
    </style>

    <div>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="layer">
                <div class="home-banner"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-search aos">
                                <h3>World's Largest <span>Marketplace</span></h3>
                                <p>Search From 150 Awesome Verified Ads!</p>
                                <div class="search-box ">

                                    <form action="{{ route('searchService') }}" method="post">
                                        @csrf
                                        <div class="search-input line">
                                            <i class="fas fa-tv bficon"></i>
                                            <div class="form-group mb-0">
                                                <input type="text" id="q" name="q"  class="form-control typeahead" placeholder="What are you looking for?" required>

                                            </div>
                                        </div>
                                        <div class="search-input">
                                            <i class="fas fa-location-arrow bficon"></i>
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" placeholder="Your Location">
                                                <a class="current-loc-icon current_location" href="#"><i class="fas fa-crosshairs"></i></a>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button class="btn search_service" type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                                @error('tenant_id')
                                <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Category Section -->
        <section class="category-section">
            <div class="container" wire:ignore>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading aos" data-aos="fade-up">
                                    <h2>Featured Categories</h2>
                                    <span>What do you need to find?</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="viewall aos" data-aos="fade-up">
                                    <h4><a href="{{ route('home.categories') }}">View All <i class="fas fa-angle-right"></i></a></h4>
                                    <span>Featured Categories</span>
                                </div>
                            </div>
                        </div>
                        <div class="catsec">
                            <div class="row">
                                @foreach ($featured as $item)
                                <div class="col-lg-4 col-md-6">
                                    <a href="search.html">
                                        <div class="cate-widget aos" data-aos="fade-up">
                                            <img src="{{ asset('assets/img/category/' .$item->image) }}" alt="">
                                            <div class="cate-title">
                                                <h3><span><i class="fas fa-circle"></i> {{ $item->name }}</span></h3>
                                            </div>
                                            <div class="cate-count">
                                                <i class="fas fa-clone"></i> {{ $item->categoryServiceCount() }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Category Section -->

        <!-- Popular Servides -->
        <section class="popular-services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading aos" data-aos="fade-up">
                                    <h2>Most Popular Services</h2>
                                    <span>Explore the greates our services. You won’t be disappointed</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="viewall aos" data-aos="fade-up">
                                    <h4><a href="{{ route('home.services') }}">View All <i class="fas fa-angle-right"></i></a></h4>
                                    <span>Most Popular</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-carousel">
                            <div class="service-slider owl-carousel owl-theme aos" data-aos="fade-up">
                                @foreach ($featuredServices as $data)
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="{{ route('home.service_details', $data->slug) }}">
                                            <img class="img-fluid serv-img" alt="Service Image" src="{{ $data->defaultImage() }}">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="#" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="#">
                                                    <img src="{{ $data->provider->userAvatar() }}" alt="">
                                                </a>
                                                <span class="service-price">{{ $data->price }}</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="{{ route('home.category-service', $data->category->slug) }}">{{ $data->category->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="{{ route('home.service_details', $data->slug) }}">{{ $data->tagline }}</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(4.3)</span>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>{{ $data->provider->mobile }}</span>
                                                </span>
                                                <span class="col ser-location">
                                                    <span>{{ $data->provider->providerLocation() }}</span> <i class="fas fa-map-marker-alt ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Popular Servides -->

        <!-- How It Works -->
        <section class="how-work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading howitworks aos" data-aos="fade-up">
                            <h2>How It Works</h2>
                            <span>Aliquam lorem ante, dapibus in, viverra quis</span>
                        </div>
                        <div class="howworksec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="howwork aos" data-aos="fade-up">
                                        <div class="iconround">
                                            <div class="steps">01</div>
                                            <img src="{{ asset('assets/img/icon-1.png') }}" alt="">
                                        </div>
                                        <h3>Choose What To Do</h3>
                                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="howwork aos" data-aos="fade-up">
                                        <div class="iconround">
                                            <div class="steps">02</div>
                                            <img src="{{ asset('assets/img/icon-2.png') }}" alt="">
                                        </div>
                                        <h3>Find What You Want</h3>
                                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="howwork aos" data-aos="fade-up">
                                        <div class="iconround">
                                            <div class="steps">03</div>
                                            <img src="{{ asset('assets/img/icon-3.png') }}" alt="">
                                        </div>
                                        <h3>Amazing Places</h3>
                                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /How It Works -->

        <!-- /our app -->
        {{-- <section class="app-set">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="col-md-12">
                            <div class="heading aos" data-aos="fade-up">
                                <h2>Download Our App</h2>
                                <span>Aliquam lorem ante, dapibus in, viverra quis</span>
                            </div>
                        </div>
                        <div class="downlaod-set aos" data-aos="fade-up">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/img/gp.png') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/img/ap.png') }}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="appimg-set aos" data-aos="fade-up">
                            <img src="{{ asset('assets/img/app.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- /our app -->
    </div>



</div>


@push('home-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source: function(query, process){
            return $.get(path, {query:query}, function(data){
                return process(data);
            });
        }
    });
</script>
@endpush
