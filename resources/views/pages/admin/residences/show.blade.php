<x-admin-layout title="Residence">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Residence</h1>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card">
                    @if ($residence->image === null)
                        <img class="card-img-top" src="{{ 'https://source.unsplash.com/random/300x300?residence' }}"
                            alt="residence">
                    @else
                        <img class="card-img-top" src="{{ url('assets/admin/img/' . $residence->image) }}"
                            alt="residence">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $residence->name }}</h5>
                        <h6 class="card-subtitle">{{ $residence->location }}</h6>
                        <div class="d-flex mt-4" style="flex-wrap: wrap; column-gap: 1.5rem; row-gap: 0.4rem">
                            <div class="bed-icon">
                                <i class="bi bi-displayport-fill"></i>
                                <span class="ml-2">{{ $residence->bed }}
                                    {{ $residence->bed > 1 ? 'Beds' : 'Bed' }}</span>
                            </div>
                            <div class="bath-icon">
                                <i class="bi bi-archive-fill"></i>
                                <span class="ml-2">{{ $residence->bath }}
                                    {{ $residence->bath > 1 ? 'Baths' : 'Bath' }}</span>
                            </div>
                            <div class="square-icon">
                                <i class="bi bi-plus-square-dotted"></i>
                                <span class="ml-2">{{ $residence->size }} m2</span>
                            </div>
                        </div>
                        <div class="row mt-4 d-none d-md-flex">
                            <div class="col-lg-6">
                                <a href="{{ route('admin.residences.index') }}"
                                    class="btn btn-sm btn-outline-primary shadow-sm">
                                    <i class="fas fa-arrow-left fa-sm"></i>
                                    <span class="mx-1">Back</span>
                                </a>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end align-items-center">
                                <a href="{{ route('admin.residences.edit', $residence->slug) }}"
                                    class="btn btn-sm btn-primary shadow-sm mx-2">
                                    <i class="fas fa-edit fa-sm"></i>
                                    <span class="mx-1">Edit</span>
                                </a>
                                <form action="{{ route('admin.residences.destroy', $residence->slug) }}"
                                    method="POST">
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
                                <a href="{{ route('admin.residences.edit', $residence->slug) }}"
                                    class="btn btn-block btn-primary shadow-sm">
                                    <i class="fas fa-edit fa-sm"></i>
                                    <span class="mx-1">Edit</span>
                                </a>
                            </div>
                            <div class="col-12 mb-2">
                                <form action="{{ route('admin.residences.destroy', $residence->slug) }}"
                                    method="POST">
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
                                <a href="{{ route('admin.residences.index') }}"
                                    class="btn btn-block btn-outline-primary shadow-sm">
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
