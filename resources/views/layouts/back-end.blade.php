<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials.__header')
<body class="theme-blue">
    @include('partials.__loader')
    @include('partials.__nav')
    @include('partials.__slider')
    @include('partials.__loader')
    <section class="content">
        <div class="container-fluid">
            @yield('content')            
        </div>
    </section>
</body>
@include('partials.__javascript')
@yield('javascript')
</html>