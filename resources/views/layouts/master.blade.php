<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Evrak Takip Sistemi</title>

    @include('layouts.partials.header')

</head>

<body class="animsition">
    <div class="page-wrapper">
    <!-- HEADER MOBILE-->
        @include('layouts.partials.navbar')
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
        @include('layouts.partials.sidebar')
    <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('layouts.partials.pageheader')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            @yield('content')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    @include('layouts.partials.footer')
</body>
</html>
<!-- end document-->