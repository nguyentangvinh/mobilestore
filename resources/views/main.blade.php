<!DOCTYPE html>
<html lang="en">

<head>
    
    @include('head')

</head>

<body>

    @include('header')

    @include('cart.overlay.list-cart')

    @yield('content')
    
    
    @include('footer')

</body>

</html>