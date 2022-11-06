<div class="review-body">
  <div class="d-flex align-items-center">
    <img class="img-fluid rounded-circle shadow" width="60" src="{{ $image }}" alt="{{ $username }}" />
    <div class="d-flex flex-column ml-3">
      <h6 class="text-light mb-0" style="font-weight: 600">
        {{ $name }}
      </h6>
      <span class="text-light">{{ $username }}</span>
    </div>
  </div>
  <p class="text-light mt-3">{{ $body }}</p>
  <hr />
</div>
