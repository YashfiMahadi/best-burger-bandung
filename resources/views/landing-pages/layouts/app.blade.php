<!DOCTYPE html>
<html>

<head>
  
  @include('landing-pages.layouts.head')

</head>

<body>

  <div class="hero_area" @stack('style')>
    @stack('image')
    
    @include('landing-pages.layouts.header')

    <!-- slider section -->
    @stack('slider')
    <!-- end slider section -->
  </div>

  @yield('content')

  @include('landing-pages.layouts.footer')
  <!-- end client section -->

  @include('landing-pages.layouts.script')

</body>

</html>