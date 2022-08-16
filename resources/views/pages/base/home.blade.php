<x-base-layout title="Home">
    <section id="hero">
        <img class="overlay-img" src="{{ url('assets/base/img/diamond-overlay-pattern.png') }}" alt="diamond-overlay" />
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center mb-4 mb-md-0">
                    <h1 class="title">Perfect Way To Buy And Sell A Home</h1>
                    <p class="text">Diam vitae, nec mattis lectus quam pretium amet facilisis. Urna, massa aliqua dui
                        pellentesque. Ac, gravida in eget non amet eget purus non.</p>
                    <div class="input-group mt-4">
                        <input type="text" class="form-control" placeholder="Search here..."
                            style="padding: 2rem 1.4rem" />
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ url('assets/base/img/hero-img.png') }}" alt="hero-img" />
                </div>
            </div>
        </div>
    </section>

    <section class="my-5" id="residence"
        style="background: {{ url('assets/base/img/residence-bg.png') }} no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading">Popular Residence</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ url('assets/base/img/residence01-img.png') }}" alt="residence-img"
                            class="card-img-top" data-fancybox="residence-img" />
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Title</h5>
                            </a>
                            <h6 class="card-subtitle">Location</h6>
                            <div class="d-flex mt-4 text-light"
                                style="flex-wrap: wrap; column-gap: 1; row-gap: 0.4rem;">
                                <div class="bed-icon">
                                    <i class="bi bi-displayport-fill"></i>
                                    <span class="ml-2">1 Beds</span>
                                </div>
                                <div class="bath-icon">
                                    <i class="bi bi-archive-fill"></i>
                                    <span class="ml-2">1 Bath</span>
                                </div>
                                <div class="square-icon">
                                    <i class="bi bi-plus-square-dotted"></i>
                                    <span class="ml-2">1024 m2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-lg btn-primary shadow-sm d-none d-lg-inline-block">
                        <i class="bi bi-grid-3x3-gap"></i>
                        <span class="mx-2">View All Properties</span>
                    </a>
                    <a href="#" class="btn btn-primary shadow-sm d-lg-none">
                        <i class="bi bi-grid-3x3-gap"></i>
                        <span class="mx-2">View All Properties</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
