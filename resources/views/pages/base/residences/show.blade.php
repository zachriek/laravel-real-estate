<x-base-layout title="Residence">
    <section id="property">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <a href="{{ route('residences.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left"></i>
                        <span class="mx-2">Back to Residences</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="residence-thumbnail col-lg-6">
                    <img class="img-fluid" src="{{ url('assets/base/img/residence01-img.png') }}" alt="residence"
                        data-fancybox="residence-thumb" />
                    <div class="residence-thumbs">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ url('assets/base/img/residence01-img.png') }}"
                                        alt="residence" data-fancybox="residence-thumb" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ url('assets/base/img/residence02-img.png') }}"
                                        alt="residence" data-fancybox="residence-thumb" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ url('assets/base/img/residence03-img.png') }}"
                                        alt="residence" data-fancybox="residence-thumb" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ url('assets/base/img/residence01-img.png') }}"
                                        alt="residence" data-fancybox="residence-thumb" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ url('assets/base/img/residence02-img.png') }}"
                                        alt="residence" data-fancybox="residence-thumb" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ url('assets/base/img/residence03-img.png') }}"
                                        alt="residence" data-fancybox="residence-thumb" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 pt-3 mt-lg-0">
                    <div class="card card-user">
                        <div class="card-body card-user">
                            <h5 class="card-title card-user">{{ $residence->name }}</h5>
                            <h6 class="card-subtitle card-user">{{ $residence->location }}</h6>
                            <div class="d-flex mt-4" style="flex-wrap: wrap; column-gap: 1.5rem; row-gap: 0.4rem">
                                <div class="bed-icon text-light">
                                    <i class="bi bi-displayport-fill"></i>
                                    <span class="ml-2">{{ $residence->bed }}
                                        {{ $residence->bed > 1 ? 'Beds' : 'Bed' }}</span>
                                </div>
                                <div class="bath-icon text-light">
                                    <i class="bi bi-archive-fill"></i>
                                    <span class="ml-2">{{ $residence->bath }}
                                        {{ $residence->bath > 1 ? 'Baths' : 'Bath' }}</span>
                                </div>
                                <div class="square-icon text-light">
                                    <i class="bi bi-plus-square-dotted"></i>
                                    <span class="ml-2">{{ $residence->size }} m2</span>
                                </div>
                            </div>
                            <div class="d-flex my-4" style="flex-wrap: wrap; gap: 1rem">
                                <button class="btn btn-outline-primary">
                                    <i class="bi bi-cart"></i>
                                    <span class="mx-2">Add to Cart</span>
                                </button>
                                <a href="" class="btn btn-primary" target="_blank" rel="noreferrer">
                                    <i class="bi bi-bag"></i>
                                    <span class="mx-2">Buy Now</span>
                                </a>
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mt-lg-5 pt-lg-5">
                <div class="col-md-8 col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item mb-2" role="presentation">
                            <button class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                data-target="#pills-description" type="button" role="tab"
                                aria-controls="pills-description" aria-selected="true">
                                Description
                            </button>
                        </li>
                        <li class="nav-item ml-2" role="presentation">
                            <button class="nav-link" id="pills-reviews-tab" data-toggle="pill"
                                data-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews"
                                aria-selected="false">
                                Reviews
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                            aria-labelledby="pills-description-tab">
                            <p class="text-light">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In laboriosam tempora
                                assumenda, dolor rerum ad magnam voluptatibus incidunt iusto, omnis amet enim sed
                                porro itaque autem obcaecati necessitatibus minus fuga.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-reviews" role="tabpanel"
                            aria-labelledby="pills-reviews-tab">
                            <x-review-body :name="'Muhammad Zachrie Kurniawan'" :username="'zachriek'" :image="'https://avatars.githubusercontent.com/u/82297739?v=4'" :body="'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos dicta molestiae inventore temporibus minus fugiat! Odit dolore nihil obcaecati eaque rem repellendus labore, magnam nobis eius repudiandae placeat culpa aut.'" />
                            <x-review-body :name="'Muhammad Zachrie Kurniawan'" :username="'zachriek'" :image="'https://avatars.githubusercontent.com/u/82297739?v=4'" :body="'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos dicta molestiae inventore temporibus minus fugiat! Odit dolore nihil obcaecati eaque rem repellendus labore, magnam nobis eius repudiandae placeat culpa aut.'" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('addon-scripts')
        <script>
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: false,
                slidesPerView: 3,
                spaceBetween: 10
            });
        </script>
    @endpush
</x-base-layout>
