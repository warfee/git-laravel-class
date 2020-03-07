<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<body class="animsition">
    <div class="page-wrapper">

        @include ('layouts.header')
        @include ('layouts.sidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include ('layouts.header-desktop')
            @yield('content')
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    @include ('layouts.foot')

</body>
</html>
<!-- end document-->
