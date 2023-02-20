<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <meta name="description" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        @include('includes.admin.sidebar')  

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('includes.admin.navbar')   

            <!-- Content wrapper -->
            <div class="content-wrapper">
                @yield('content')
                @include('includes.admin.footer')
                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->

        </div>
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    @stack('prepend-script')
    @include('includes.admin.script')
    @stack('addon-script')

  </body>
</html>