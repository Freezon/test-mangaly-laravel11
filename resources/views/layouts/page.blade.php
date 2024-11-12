<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @stack('meta')
    @push('meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@stack('meta.title')</title>
        @push('meta.title')
            Site example
        @endpush

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @endpush

    @vite([ 'resources/css/app.scss', 'resources/ts/app.ts'])

    @stack('style.header')
    @stack('scripts.header')
</head>
<body @stack('body.data') >
@yield('body.before')
<div class="wrapper" id="app" data-action="{{request()->route()->getName()}}">
    @include('elements.header')
    <main>
        @yield('body.content')
    </main>
    @include('elements.footer')
</div>
@yield('body.after')

@stack('scripts.footer')
@stack('style.footer')
</body>
</html>
