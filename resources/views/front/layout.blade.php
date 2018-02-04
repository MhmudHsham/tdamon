<!DOCTYPE html>
<html>
    <head>
        @include('front.components.meta')
    </head>
    <body>
        <div id="page-wrapper">
            @include('front.components.header')

            @yield('content')

            @include('front.components.footer')
        </div>
    </body>
</html>
