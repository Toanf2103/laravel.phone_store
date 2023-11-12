<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="root-url" data-index="{{ URL::to('/'); }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Toanf-messi</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End bootstrap -->

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
    <!-- End fontawesome -->

    <!-- Header -->
    <link rel="stylesheet" href="{{ url('public/site/css/header.css') }}">
    <!-- End Header -->

    <!-- footer -->
    <link rel="stylesheet" href="{{ url('public/site/css/footer.css') }}">
    <!-- End footer -->


    @yield('css')
</head>

<body>
    @include('site/partials/header')
    @yield('slider')
    @yield('title-page')
    <div class="content">
        @yield('content')
    </div>
    @yield('content-more')

    @include('site/partials/footer')

    <!-- sweetalert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- End sweetalert2 JS -->

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- End bootstrap JS -->

    <!-- main JS -->
    <script src="{{ url('public/site/js/main.js') }}"></script>
    <!-- End main JS -->

    @yield('js')
</body>

</html>