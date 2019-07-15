<!DOCTYPE html>
<html lang="en">
		@include('sportnews.partials.head')

	
	<body>

		<!-- Header -->

		@include('sportnews.partials.header')

		
		<!-- /Header -->

		<!-- section -->
		@yield('content')
		<!-- /section -->
		
@include('sportnews.partials.footer')

	</body>
</html>
