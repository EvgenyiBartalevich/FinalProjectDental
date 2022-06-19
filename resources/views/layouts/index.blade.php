<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title_content')</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href=/image" rel="stylesheet">
    <link href="{{ URL::asset('css/media.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,900&display=swap" rel="stylesheet">
    <script src="{{ URL::asset('js/app.js') }}"></script>
</head>
<body>
<div class="container">
    @include('inc.header')
</div>
    @yield('content_1')
<div class="container">
    @include('inc.footer')
</div>

</script>
</body>
</html>

