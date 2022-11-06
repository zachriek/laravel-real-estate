<x-admin-layout title="Edit Transaction">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Transaction</h1>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-8 col-12">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('admin.transactions.update', $transaction->id) }}" method="POST">
              @csrf
              @method('PATCH')

              <div class="form-group">
                <label for="transaction_status">Transaction Status</label>
                <select class="form-control @error('transaction_status') is-invalid @enderror" name="transaction_status"
                  id="transaction_status">
                  @foreach (['in_cart', 'pending', 'success', 'failed', 'cancel'] as $status)
                    @if ($status === $transaction->transaction_status)
                      <option value="{{ $status }}" selected>{{ strtoupper($status) }} (SELECTED)</option>
                    @else
                      <option value="{{ $status }}">{{ strtoupper($status) }}</option>
                    @endif
                  @endforeach
                </select>
                @error('transaction_status')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="row mt-4 d-none d-md-flex">
                <div class="col-md-6">
                  <a href="{{ route('admin.transactions.show', $transaction->id) }}"
                    class="btn btn-sm btn-outline-primary shadow-sm">
                    <i class="fas fa-arrow-left fa-sm"></i>
                    <span class="mx-1">Back</span>
                  </a>
                </div>
                <div class="col-md-6 d-md-flex justify-content-end align-items-center">
                  <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-wrench fa-sm"></i>
                    <span class="mx-1">Update</span>
                  </button>
                </div>
              </div>
              <div class="row mt-4 d-md-none">
                <div class="col-12 mb-2">
                  <button type="submit" class="btn btn-block btn-primary shadow-sm">
                    <i class="fas fa-wrench fa-sm"></i>
                    <span class="mx-1">Update</span>
                  </button>
                </div>
                <div class="col-12">
                  <a href="{{ route('admin.transactions.show', $transaction->id) }}"
                    class="btn btn-block btn-outline-primary shadow-sm">
                    <i class="fas fa-arrow-left fa-sm"></i>
                    <span class="mx-1">Back</span>
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
