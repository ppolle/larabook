<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Larabook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.cssv">
</head>
<body>
@include('layouts.partials.nav');


<div class="container">
    @yield('content')
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>