<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title_content')</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href=/image" rel="stylesheet">
    <!--<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet">-->
    <script src="{{ URL::asset('js/app.js') }}"></script>
</head>
<body>
    @include('inc.header')

    @yield('content_1')

    @include('inc.footer')
</body>
</html>

