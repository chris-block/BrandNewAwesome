<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App</title>
	<link href="http://cdn.foundation5.zurb.com/foundation.css" media="all" rel="stylesheet"/>
</head>
<body>
	<nav></nav>
	<section role="main">
		
		<div class="row body master">

			<div class="large-12 small-12 columns">
				
				@yield('content')
				
			</div>

		</div>
		
	</section>

	@yield('footer')
		
</body>
</html>