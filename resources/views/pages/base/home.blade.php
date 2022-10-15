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
                @foreach ($residences as $residence)
                    <div class="col-lg-4 mb-4">
                        <x-residence-card :residence="$residence" :fancybox="'residence_home_img'" />
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="{{ route('residences.index') }}"
                        class="btn btn-lg btn-primary shadow-sm d-none d-lg-inline-block">
                        <i class="bi bi-grid-3x3-gap"></i>
                        <span class="mx-2">View All Residences</span>
                    </a>
                    <a href="{{ route('residences.index') }}" class="btn btn-primary shadow-sm d-lg-none">
                        <i class="bi bi-grid-3x3-gap"></i>
                        <span class="mx-2">View All Residences</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="offer">
        <img src="{{ url('assets/base/img/arrow-shade-pattern.png') }}" alt="arrow-shade-pattern"
            class="overlay-img img-fluid" />
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="heading">Why To Choose Us</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-4 col-12 mb-5">
                    <img src="{{ url('assets/base/img/loupe.png') }}" alt="loupe-icon" class="offer-icon" />
                    <h5 class="card-title text-light">Easy to find</h5>
                    <p class="card-text text-light">Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec
                        mattis lectus quam pretium amet facilisis.</p>
                </div>
                <div class="col-md-4 col-12 mb-5">
                    <img src="{{ url('assets/base/img/tag.png') }}" alt="tag-icon" class="offer-icon" />
                    <h5 class="card-title text-light">Affordable Prices</h5>
                    <p class="card-text text-light">Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec
                        mattis lectus quam pretium amet facilisis.</p>
                </div>
                <div class="col-md-4 col-12 mb-5">
                    <img src="{{ url('assets/base/img/quick.png') }}" alt="quick-icon" class="offer-icon" />
                    <h5 class="card-title text-light">Quickly Process</h5>
                    <p class="card-text text-light">Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec
                        mattis lectus quam pretium amet facilisis.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact"
        style="background: url('/assets/images/residence-bg.png') no-repeat; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6 mb-5">
                    <img src="{{ url('assets/base/img/home-1-img.png') }}" alt="home-1-img" class="img-fluid" />
                </div>
                <div class="col-lg-3 col-6 mb-5">
                    <img src="{{ url('assets/base/img/home-2-img.png') }}" alt="home-2-img" class="img-fluid" />
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
                    <h2 class="heading">
                        We Help People To
                        <br />
                        Find Homes
                    </h2>
                    <p class="text-light mb-4">
                        Mauris orci donec blandit maecenas. Orci lorem purus porttitor massa consectetur. Neque,
                        vestibulum
                        sed varius magna et at. Eu, adipiscing morbi augue justo. Nibh laoreet
                        volutpat quis velit. Blandit aliquam donec sed morbi congue eget lorem viverra porta id
                        lobortis.
                    </p>
                    <a href="https://api.whatsapp.com/send?phone=6281274786920"
                        class="btn btn-lg btn-primary shadow-sm d-none d-lg-inline-block" target="_blank"
                        rel="noreferrer">
                        <i class="bi bi-whatsapp"></i>
                        <span class="mx-2">Get In Touch</span>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=6281274786920"
                        class="btn btn-primary shadow-sm d-lg-none" target="_blank" rel="noreferrer">
                        <i class="bi bi-whatsapp"></i>
                        <span class="mx-2">Get In Touch</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
