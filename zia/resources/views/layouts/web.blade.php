<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Zia Innovation | Home</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="https://digitalcenturysf.com/" />
    <link rel="icon" href="{{ asset('web/img/favicon.png') }}" type="image/png')}}" sizes="16x16" />

    <x-web.style />
    @yield('innerstyle')

</head>

<body class="{{Route::current()->getName() !== 'home' ? 'inner-page' : '' }}">

    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->

    <x-web.header />

    @yield('content')

    <x-web.footer />

    <x-web.script />

    @yield('innerjs')

</body>

</html>
