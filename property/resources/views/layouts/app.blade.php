<!DOCTYPE html>
<html lang="en">

    <head> 
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <title>@yield('title')</title>

        <link rel="icon" type="image/png" href="{{ Storage::url($informasi->logo) }}" />

        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')

    </head>
    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            @include('includes.navbar')

            @yield('content')
            

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        @include('includes.footer')

        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')
    </body>
</html>
