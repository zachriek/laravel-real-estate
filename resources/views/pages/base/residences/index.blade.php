<x-base-layout title="Residences">
  <section id="properties">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6">
          <h2 class="heading">Residences</h2>
        </div>
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search here..." style="padding: 1.4rem" />
            <div class="input-group-append">
              <button type="button" class="btn btn-primary">
                Search
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($residences as $residence)
          <div class="col-lg-4 col-md-6 col-12 mb-4">
            <x-residence-card :residence="$residence" :fancybox="'residence_img'" />
          </div>
        @endforeach
      </div>
      <div class="row mt-3">
        <div class="col-12">
          {{ $residences->onEachSide(1)->links() }}
        </div>
      </div>
    </div>
  </section>
</x-base-layout>
