<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Document</title>
	<link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	
</head>
<body>

<div class="container">
@yield('content')
</div>

@yield('footer')

</body>
</html>

