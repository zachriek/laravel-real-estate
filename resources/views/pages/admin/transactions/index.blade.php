<x-admin-layout title="Transactions">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Transactions</h1>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table transaction-table">
            <thead>
              <tr>
                <th>No.</th>
                <th>User</th>
                <th>Residence</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transactions as $transaction)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $transaction->user->name }}</td>
                  <td>{{ $transaction->residence->name }}</td>
                  <td>
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
                  </td>
                  <td>
                    <a href="{{ route('admin.transactions.show', $transaction->id) }}"
                      class="btn btn-sm btn-outline-primary shadow-sm">
                      <i class="fas fa-eye fa-sm"></i>
                      <span class="mx-1">Show</span>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  @push('addon-scripts')
    <script>
      $(document).ready(function() {
        $('.transaction-table').DataTable();
      })
    </script>
  @endpush
</x-admin-layout>
