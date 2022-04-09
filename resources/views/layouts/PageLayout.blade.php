<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goprint @yield('title')</title>
</head>
<body>
    <h1>@yield('header')</h1>
 <ul>

        <li><a href="/"></a>home page</li>
        <li><a href="/about"></a>about us page</li>
        <li><a href="/contact"></a>contact us page</li>

</ul>

    <p>@yield('content')<p>
        <h4>@ Copy right Reserved</h4>
</body>
</html>