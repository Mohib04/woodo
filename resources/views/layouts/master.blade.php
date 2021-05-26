<!--head section start -->
@include('layouts.head')
<!--head section end -->
<body>
	<!-- header section start -->
	@include('layouts.header')
	<!-- header section end -->

	@yield('bodySection')
	

	<!-- footer section start -->
	@include('layouts.footer')
	<!-- footer section end -->

</body>
</html>