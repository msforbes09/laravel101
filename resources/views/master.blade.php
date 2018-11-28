<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
</head>
<body>
    @include('shared.navbar')

    @yield('content')

    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
	<script src="{!! asset('js/popper.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</body>
</html>