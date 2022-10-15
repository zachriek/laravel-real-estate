<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @stack('prepend-styles')
  @include('partials.guest.styles')
  @stack('addon-styles')

  <title>{{ $title }} &mdash; Real Estate</title>
</head>

<body>
  @include('sweetalert::alert')

  <section id="auth">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="{{ route('home') }}" class="text-primary" style="opacity: 0.7;">Back to Home</a>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-lg-5 col-md-8 col-12">{{ $slot }}</div>
      </div>
    </div>
  </section>

  @stack('prepend-scripts')
  @include('partials.guest.scripts')
  @stack('addon-scripts')
</body>

</html>
