<x-base-layout title="Cart">
  <section id="cart">
    <div class="container">
      <div class="row mb-4">
        <div class="col-sm-6">
          <h2 class="heading text-light mb-2">My Cart</h2>
        </div>
        <div class="col-sm-6 d-sm-flex justify-content-end align-items-center text-light">
          <i class="bi bi-house-door"></i>
          <span class="ml-2">{{ count($transactions) }} Items</span>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="text-light">
                <tr>
                  <th>No.</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($transactions as $transaction)
                  <tr>
                    <td class="align-middle text-light">
                      {{ $loop->iteration }}.
                    </td>
                    <td class="align-middle text-light">
                      <img class="img-fluid" width="75" src="" alt="residence" loading="lazy" />
                    </td>
                    <td class="align-middle text-light">
                      {{ $transaction->residence->name }}
                    </td>
                    <td class="align-middle text-light">
                      {{ $transaction->residence->location }}
                    </td>
                    <td class="align-middle">
                      <form action="{{ route('carts.update', $transaction->residence->slug) }}" method="POST"
                        class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-primary">
                          <i class="bi bi-cart-check"></i>
                          <span class="mx-2">Buy</span>
                        </button>
                      </form>
                      <form action="{{ route('carts.destroy', $transaction->residence->slug) }}" method="POST"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-primary"
                          onclick="return confirm('Are you sure?');">
                          <i class="bi bi-x"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <div class="alert alert-danger" role="alert">
                    Cart Empty!
                  </div>
                @endforelse
              </tbody>
            </table>
          </div>
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
