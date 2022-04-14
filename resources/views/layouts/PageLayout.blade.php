<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goprint @yield('title')</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container" >
    <div class="row">
    
    <div class="col-md-4 pading up " >
        <h1>@yield('header')</h1>

        <ul>

            <li><a href="/"></a>home page</li>
            <li><a href="/about"></a>about us page</li>
            <li><a href="/contact"></a>contact us page</li>
    
    </ul>
    </div>
    <div class=" col-md-8 border-left" >

        <p>@yield('content')<p>
            <h4>@ Copy right Reserved</h4>
    
    </div>
    </div>
    
    
 

    
</body>
</html>