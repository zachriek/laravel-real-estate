<x-admin-layout title="Residences">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Residences</h1>
            <a href="{{ route('admin.residences.create') }}" class="btn btn-sm btn-primary shadow-sm mt-2 mt-sm-0">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                <span class="mx-1">Add New Residence</span>
            </a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table residence-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Location</th>
                                <th>Bed</th>
                                <th>Bath</th>
                                <th>Size</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($residences as $residence)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($residence->image === null)
                                            <img class="img-fluid"
                                                src="{{ 'https://source.unsplash.com/random/300x300?residence' }}"
                                                alt="residence" width="100">
                                        @else
                                            <img class="img-fluid"
                                                src="{{ url('assets/admin/img/' . $residence->image) }}" alt="residence"
                                                width="100">
                                        @endif
                                    </td>
                                    <td>{{ $residence->name }}</td>
                                    <td>{{ $residence->slug }}</td>
                                    <td>{{ $residence->location }}</td>
                                    <td>{{ $residence->bed }} {{ $residence->bed > 1 ? 'beds' : 'bed' }}</td>
                                    <td>{{ $residence->bath }} {{ $residence->bath > 1 ? 'baths' : 'bath' }}</td>
                                    <td>{{ $residence->size }} m2</td>
                                    <td>
                                        <a href="{{ route('admin.residences.show', $residence->slug) }}"
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
                $('.residence-table').DataTable();
            })
        </script>
    @endpush
</x-admin-layout>
