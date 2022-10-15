<x-admin-layout title="Edit Profile">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-8 col-12">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              {{-- Image Preview --}}
              @if (auth()->user()->image)
                <img class="img-thumbnail" src="{{ url('assets/admin/img/' . auth()->user()->image) }}"
                  alt="user-profile">
              @else
                <img class="img-thumbnail" src="https://source.unsplash.com/random/300x300?person" alt="user-profile">
              @endif

              {{-- Residence Image --}}
              <div class="form-group mt-2">
                <div class="custom-file">
                  <label for="image" class="custom-file-label">Choose image</label>
                  <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image"
                    id="image" onchange="previewImage(this)">
                  @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              {{-- Name --}}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                  id="name" value="{{ old('name', auth()->user()->name) }}">
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              {{-- Username --}}
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                  id="username" value="{{ old('username', auth()->user()->username) }}">
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              {{-- Email --}}
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  id="email" value="{{ old('email', auth()->user()->email) }}">
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="row mt-4 d-none d-md-flex">
                <div class="col-12 d-md-flex justify-content-end align-items-center">
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
          console.log(e.target.result);
          image.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
      }
    </script>
  @endpush
</x-admin-layout>
