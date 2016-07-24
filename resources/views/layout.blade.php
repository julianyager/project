<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <title>Document</title>
    <!--same as  href="/css/style.css"-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		@yield('header')
</head>
<body>

	<div class="container">
  		@yield('content')
	</div>
  @yield('footer')

</body>
</html>
