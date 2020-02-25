<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	@yield('styles')
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	
	<div class="wrapper">
	@include('partials.sidebar')

	@yield('content')
	</div>

	</body>
	@yield('scripts')

	<script src="{{ asset('js/app.js') }}"></script>


	<script>
			$(document).ready(function () {

	$('#sidebarCollapse').on('click', function () {
	    $('#sidebar').toggleClass('active');
	});

	});

	</script>

	

</body>
</html>