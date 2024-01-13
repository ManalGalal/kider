
<!DOCTYPE html>
<html lang="en">

<head>
   
    @include('includes.head')

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
      @include('includes.spinner')
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
           @include('includes.navbar')
        </nav>
        <!-- Navbar End -->

        <!-- Page Header End -->
        @include('includes.header')
        <!-- Page Header End -->

      @yield('about')
   
      @yield('calltoaction')
   
      @yield('team')
      @yield('appointment')
      @yield('testmonials')
   
      @yield('facilities')
      @yield('classes')
      @yield('contact')
   
        <!-- Footer Start -->
        @include('includes.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('includes.js')

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>