<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>トップページだよ</title>
<meta name="viewport" content="awidth=device-width,minimum-scale=1">
<link href={{ URL::to('tbs/css/bootstrap.min.css')}} rel="stylesheet">
<link href={{ URL::to('tbs/css/bootstrap-responsive.min.css')}} rel="stylesheet">
</head>
<body>
<div class="navbar">
<div class="navbar-inner">
<div class="ccontainer">
<a href="#" class="brand">やったぜ</a>
<ul class="nav">
 @section('navigation')
 <li><a href='#'>TOP</a></li>
 <li><a href='#'>UPDATE</a></li>
 @show
</ul>
</div>
</div>
</div>
<div class="container">
 @yield('content')
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js">
</script>
<script src={{ URL::to('tbs/js/bootstrap.min.js') }}></script>
</body>
</html>