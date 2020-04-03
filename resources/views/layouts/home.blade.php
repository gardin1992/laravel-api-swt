<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="utf-8">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<link rel="stylesheet" href="/bower_components/jquery-ui/themes/base/jquery-ui.min.css">
<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/css/app.css">

<!-- Scripts -->
<script>
	window.Laravel = <?php echo json_encode([
    	'csrfToken' => csrf_token(),
    ]); ?>
</script>

    <style>

        video {
            width: 700px;
        }

    </style>
</head>
<body>

@include('partials.navbar')

<div class="container">
	 @yield('content')
</div>

<!-- Inline Scripts -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="/public/js/lib/mp4box.all.min.js"></script>
<script src="/public/js/modules/dash/downloader.js"></script>
<script src="/public/js/modules/dash/sample-urls.js"></script>
<script src="/public/js/modules/dash/movieInfoDisplay.js"></script>
<script src="/public/js/modules/dash/index.js"></script>

</body>
</html>