<!DOCTYPE html>
<html lang="en">
@include('pages.head')

<body>
    @include('pages.header')
    @include('pages.aside')


    <main id="main" class="main">
        @yield('main_section')
    </main><!-- End #main -->


    @include('pages.footer')
    @include('pages.script')

</body>

</html>