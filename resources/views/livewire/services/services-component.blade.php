
@section('title', 'Services')

<div>


    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-title">
                        <h2>Find a Professional</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 theiaStickySidebar" wire:ignore>
                    <div class="card filter-card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Search Filter</h4>
                            <form action="{{ route('searchService') }}" method="post">
                                @csrf
                                <div class="filter-widget">
                                    <div class="filter-list">
                                        <h4 class="filter-title">Keyword</h4>
                                        <input type="text" id="q" name="q" class="form-control typeahead" placeholder="What are you looking for?" required>
                                    </div>
                                    {{-- <div class="filter-list">
                                        <h4 class="filter-title">Sort By</h4>
                                        <select class="form-control selectbox select form-select">
                                            <option>Sort By</option>
                                            <option>Price Low to High</option>
                                            <option>Price High to Low</option>
                                            <option>Newest</option>
                                        </select>
                                    </div>
                                    <div class="filter-list">
                                        <h4 class="filter-title">Categories</h4>
                                        <select class="form-control form-control selectbox select form-select">
                                            <option>All Categories</option>
                                            <option>Computer</option>
                                            <option selected="">Automobile</option>
                                            <option>Car Wash</option>
                                            <option>Cleaning</option>
                                            <option>Electrical</option>
                                            <option>Construction</option>
                                        </select>
                                    </div> --}}
                                    <div class="filter-list">
                                        <h4 class="filter-title">Location</h4>
                                        <input class="form-control" type="text" placeholder="Search Location">
                                    </div>
                                </div>
                                <button class="btn btn-primary pl-5 pr-5 btn-block get_services w-100" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center mb-4">
                        <div class="col-md-6 col">
                            <h4><span>{{ $totalServices }}</span> Services</h4>
                        </div>
                        <div class="col-md-6 col-auto">
                            <div class="view-icons">
                                <a href="#" class="grid-view active"><i class="fas fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="{{ route('home.service_details', $service->slug) }}">
                                            <img class="img-fluid serv-img" alt="Service Image" src="{{ $service->defaultImage() }}">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="#" class="fav-icon" wire:click.prevent="favorite('{{ $service->id }}')">
                                                @if ($service->userFavorite())
                                                <i class="fas fa-heart" style="color: red"></i>
                                                @else
                                                <i class="fas fa-heart"></i>
                                                @endif
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="#">
                                                    <img src="{{ $service->provider->avatar }}" alt="">
                                                </a>
                                                <span class="service-price">{{ $service->price }}</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="#">{{ $service->category->name }} </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="{{ route('home.service_details', $service->slug) }}">{{ $service->name }}  </a>
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
                                                {{-- <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>{{ $service->provider->mobile }}</span>
                                                </span> --}}
                                                <span class="col ser-location">
                                                    <span>{{ $service->provider->providerLocation() }}</span> <i class="fas fa-map-marker-alt ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $services->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>﻿

    <x-confirmation-alert />
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
