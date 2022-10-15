<x-admin-layout title="Edit Residence">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Residence</h1>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.residences.update', $residence->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            {{-- Image Preview --}}
                            @if ($residence->image !== null)
                                <img class="img-thumbnail" src="{{ url('assets/admin/img/' . $residence->image) }}"
                                    alt="residence">
                            @else
                                <img class="img-thumbnail" src="https://source.unsplash.com/random/800x400?residence"
                                    alt="residence">
                            @endif

                            {{-- Residence Image --}}
                            <div class="form-group mt-2">
                                <div class="custom-file">
                                    <label for="image" class="custom-file-label">Choose image</label>
                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror"
                                        name="image" id="image" onchange="previewImage(this)">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Residence Name --}}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" value="{{ old('name', $residence->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Residence Location --}}
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror"
                                    name="location" id="location" value="{{ old('location', $residence->location) }}">
                                @error('location')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Residence Bed --}}
                            <div class="form-group">
                                <label for="bed">Bed</label>
                                <input type="text" class="form-control @error('bed') is-invalid @enderror"
                                    name="bed" id="bed" value="{{ old('bed', $residence->bed) }}">
                                @error('bed')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Residence Bath --}}
                            <div class="form-group">
                                <label for="bath">Bath</label>
                                <input type="text" class="form-control @error('bath') is-invalid @enderror"
                                    name="bath" id="bath" value="{{ old('bath', $residence->bath) }}">
                                @error('bath')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Residence Size --}}
                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="text" class="form-control @error('size') is-invalid @enderror"
                                    name="size" id="size" value="{{ old('size', $residence->size) }}">
                                @error('size')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mt-4 d-none d-md-flex">
                                <div class="col-md-6">
                                    <a href="{{ route('admin.residences.show', $residence->slug) }}"
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
                                    <a href="{{ route('admin.residences.show', $residence->slug) }}"
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

    @push('addon-scripts')
        <script>
            const image = document.querySelector('.img-thumbnail');
            const previewImage = (input) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        </script>
    @endpush
</x-admin-layout>
