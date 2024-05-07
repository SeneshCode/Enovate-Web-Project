<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ENOVATE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('styles.style')


</head>

<body>

    @include('components.navigation')

    @yield('content')

    <main id="main">
        @yield('content2')
    </main>


    @include('components.footer')

    @include('styles.script')

</body>

</html>
