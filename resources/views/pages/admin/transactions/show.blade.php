<x-admin-layout title="Transaction">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Transaction</h1>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-8 col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">{{ $transaction->residence->name }}</h5>
            <h6 class="card-subtitle text-muted mb-4">{{ $transaction->user->name }}</h6>
            <p class="card-text">
              @if ($transaction->transaction_status === 'success')
                <i class="fas fa-check-circle"></i>
              @elseif ($transaction->transaction_status === 'pending')
                <i class="fas fa-clock"></i>
              @elseif ($transaction->transaction_status === 'in_cart')
                <i class="fas fa-shopping-cart"></i>
              @elseif ($transaction->transaction_status === 'failed' || $transaction->transaction_status === 'cancel')
                <i class="fas fa-times-circle"></i>
              @endif
              <span class="mx-1">{{ strtoupper($transaction->transaction_status) }}</span>
            </p>
            <div class="row mt-4 d-none d-md-flex">
              <div class="col-lg-6">
                <a href="{{ route('admin.transactions.index') }}" class="btn btn-sm btn-outline-primary shadow-sm">
                  <i class="fas fa-arrow-left fa-sm"></i>
                  <span class="mx-1">Back</span>
                </a>
              </div>
              <div class="col-lg-6 d-flex justify-content-end align-items-center">
                <a href="{{ route('admin.transactions.edit', $transaction->id) }}"
                  class="btn btn-sm btn-primary shadow-sm mx-2">
                  <i class="fas fa-edit fa-sm"></i>
                  <span class="mx-1">Edit</span>
                </a>
                <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger shadow-sm"
                    onclick="return confirm('Are you sure?');">
                    <i class="fas fa-trash fa-sm"></i>
                    <span>Delete</span>
                  </button>
                </form>
              </div>
            </div>
            <div class="row mt-5 d-md-none">
              <div class="col-12 mb-2">
                <a href="{{ route('admin.transactions.edit', $transaction->id) }}"
                  class="btn btn-block btn-primary shadow-sm">
                  <i class="fas fa-edit fa-sm"></i>
                  <span class="mx-1">Edit</span>
                </a>
              </div>
              <div class="col-12 mb-2">
                <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-block btn-danger shadow-sm"
                    onclick="return confirm('Are you sure?');">Delete</button>
                </form>
                <button class="btn btn-block btn-danger shadow-sm">
                  <i class="fas fa-trash fa-sm"></i>
                  <span class="mx-1">Delete</span>
                </button>
              </div>
              <div class="col-12">
                <a href="{{ route('admin.transactions.index') }}" class="btn btn-block btn-outline-primary shadow-sm">
                  <i class="fas fa-arrow-left fa-sm"></i>
                  <span class="mx-1">Back</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
