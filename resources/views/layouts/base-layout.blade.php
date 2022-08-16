<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @stack('prepend-styles')
    @include('partials.base.styles')
    @stack('addon-styles')

    <title>{{ $title }} &mdash; Real Estate</title>
</head>

<body>
    @include('sweetalert::alert')

    <x-base-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-base-footer />

    @stack('prepend-scripts')
    @include('partials.base.scripts')
    @stack('addon-scripts')
</body>

</html>
