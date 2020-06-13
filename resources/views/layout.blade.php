<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div id="header-wrapper">
        <div id="header" class="container p-0">
            <div id="logo">
                <h1><a href="/">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1"
                            title="">Homepage</a></li>
                    <li class="{{ Request::path() === 'clients' ? 'current_page_item' : '' }}"><a href="#" accesskey="2"
                            title="">Our Clients</a></li>
                    <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="/about"
                            accesskey="3" title="">About Us</a></li>
                    <li class="{{ Request::path() === 'careers' ? 'current_page_item' : '' }}"><a href="#" accesskey="4"
                            title="">Careers</a></li>
                    <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="#" accesskey="5"
                            title="">Contact Us</a></li>
                </ul>
            </div>
        </div>

        @yield('header')
    </div>
    <div class="wrapper mt-4">
        <div id="page" class="container p-0 w-100">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
