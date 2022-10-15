<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }} &mdash; Admin</title>

    @stack('prepend-styles')
    @include('partials.admin.styles')
    @stack('addon-styles')
</head>

<body id="page-top">
    @include('sweetalert::alert')

    <!-- Page Wrapper -->
    <div id="wrapper">
        {{-- Sidebar --}}
        <x-admin-sidebar />

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                {{-- Navbar --}}
                <x-admin-navbar />

                {{-- Main Content --}}
                {{ $slot }}
            </div>
            <!-- End of Main Content -->

            {{-- Footer --}}
            <x-admin-footer />

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    {{-- Scroll to Top --}}
    <x-admin-scroll-top />

    {{-- Logout Modal --}}
    <x-admin-logout-modal />

    @stack('prepend-scripts')
    @include('partials.admin.scripts')
    @stack('addon-scripts')
</body>

</html>
