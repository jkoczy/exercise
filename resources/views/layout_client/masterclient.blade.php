<!DOCTYPE html>
<html lang="en">
<!--head-->
@include('layout_client/head')
<body>

<div class="super_container">
	
	<!-- Header -->

    @include('layout_client/header')

	<!-- Menu -->

    @include('layout_client/menu')

	<!--Content-->
    @yield('content')

	<!-- Footer -->
    @include('layout_client/footer')

</div>
    <!--Script-->
    @include('layout_client/script')
    @yield('script')
</body>
</html>