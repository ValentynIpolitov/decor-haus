<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @routes
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <script src="{{ asset(mix('js/manifest.js')) }}" defer></script>
    <script src="{{ asset(mix('js/vendor.js')) }}" defer></script>
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
    @inertiaHead
    
    <script src="https://kit.fontawesome.com/c6473ff5f2.js" crossorigin="anonymous"></script>
</head>

<body>
    @inertia
</body>

</html>