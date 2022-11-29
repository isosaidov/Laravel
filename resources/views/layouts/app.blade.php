
<!DOCTYPE HTML>
<html>
<head>
    <!-- Этот раздел предназначен для заголовка страницы и технической информации. -->
    <title>@yield('title-block')</title>
    <link rel = "stylesheet" href="/css/app.css">


</head>

<body>
@include('inc.header')

@if(Request :: is('/'))
@include('inc.hero')
@endif

@yield('content')
@include('inc.aside')
@include('inc.footer')
</body>
</html>

