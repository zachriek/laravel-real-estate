<x-base-layout title="Cart">
    <section id="cart">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="heading text-light mb-2">My Cart</h2>
                </div>
                <div class="col-sm-6 d-sm-flex justify-content-end align-items-center text-light">
                    <i class="bi bi-house-door"></i>
                    <span class="ml-2">2 Items</span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="text-light">
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-light">1.</td>
                                <td class="align-middle text-light">
                                    <img class="img-fluid" width="75" src="" alt="residence" />
                                </td>
                                <td class="align-middle text-light">Nama</td>
                                <td class="align-middle text-light">Lokasi</td>
                                <td class="align-middle text-light">Harga</td>
                                <td class="align-middle">
                                    <button class="btn btn-primary">
                                        <i class="bi bi-cart-check"></i>
                                        <span class="mx-2">Buy</span>
                                    </button>
                                    <button class="btn btn-outline-primary">
                                        <i class="bi bi-x"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-light">2.</td>
                                <td class="align-middle text-light">
                                    <img class="img-fluid" width="75" src="" alt="residence" />
                                </td>
                                <td class="align-middle text-light">Nama</td>
                                <td class="align-middle text-light text-light">Lokasi</td>
                                <td class="align-middle text-light">Harga</td>
                                <td class="align-middle">
                                    <button class="btn btn-primary">
                                        <i class="bi bi-cart-check"></i>
                                        <span class="mx-2">Buy</span>
                                    </button>
                                    <button class="btn btn-outline-primary">
                                        <i class="bi bi-x"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-end align-items-center">
                    <a href="{{ route('residences.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left"></i>
                        <span class="mx-2">Back to Properties</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
