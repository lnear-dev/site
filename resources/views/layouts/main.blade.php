<!DOCTYPE html>
<html lang="en">
<head>
    <title>lnear.dev</title>
    <meta charset="utf-8" />
    <base href="/" />
    <!-- This meta viewport ensures the webpage's dimensions change according to the device it's on. This is called Responsive Web Design.-->
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0" />
    <meta name="description" content="this is lnear.dev, i am Lanre, but feel free to call me lnear" />
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#181818" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#f3f3f3" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Lnear.dev" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="icon" href="/assets/brand-kit/cl_LNE.svg" type="image/x-icon" />
    {{-- <link rel="stylesheet" href="/style.css" /> --}}
    <link rel="manifest" href="/manifest.json" />
    {{-- @vite('resources/css/app.css')
    @vite('resources/ts/app.ts') --}}
    @yield('head')
</head>
<body>
    @yield('content')
    <script>
        if ('serviceWorker' in navigator)
            navigator.serviceWorker.register('/sw.js');

    </script>
</body>
</html>
