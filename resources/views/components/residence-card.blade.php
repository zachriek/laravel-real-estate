<div class="card residence-card">
  @if ($residence->image === null)
    <img src="{{ 'https://source.unsplash.com/random/800x400?residence' }}" alt="residence-img" class="card-img-top"
      data-fancybox="{{ $fancybox }}" />
  @else
    <img src="{{ url('assets/base/img/' . $residence->image) }}" alt="residence-img" class="card-img-top"
      data-fancybox="{{ $fancybox }}" />
  @endif
  <div class="card-body">
    <h5 class="card-title">{{ $residence->name }}</h5>
    <h6 class="card-subtitle">{{ $residence->location }}</h6>
    <div class="d-flex mt-4 text-light" style="flex-wrap: wrap; column-gap: 1rem; row-gap: 0.4rem;">
      <div class="bed-icon">
        <i class="bi bi-displayport-fill"></i>
        <span class="ml-1">{{ $residence->bed }} {{ $residence->bed > 1 ? 'Beds' : 'Bed' }}</span>
      </div>
      <div class="bath-icon">
        <i class="bi bi-archive-fill"></i>
        <span class="ml-1">{{ $residence->bath }} {{ $residence->bath > 1 ? 'Baths' : 'Bath' }}</span>
      </div>
      <div class="square-icon">
        <i class="bi bi-plus-square-dotted"></i>
        <span class="ml-1">{{ $residence->size }} m2</span>
      </div>
    </div>
    <a href="{{ route('residences.show', $residence->slug) }}"
      class="btn btn-block btn-outline-primary shadow-sm mt-3">
      <i class="bi bi-eye"></i>
      <span class="mx-1">Show</span>
    </a>
  </div>
</div>
