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

    @include('components.navigation2')

    <main id="main">
        @yield('content')
        <section id="blog" class="blog">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8 entries">
                        @yield('content2')
                    </div>
                    @include('components.sidebar')

                </div>
            </div>
        </section>

    </main>

    @include('components.footer')

    @include('styles.script')

</body>

</html>
