<!DOCTYPE html>
<html lang="en">
@include('pages.components.head')
<body>
    @include('pages.components.navigation')
    
    @yield('content')

    @include('pages.components.footer')
</body>
</html>