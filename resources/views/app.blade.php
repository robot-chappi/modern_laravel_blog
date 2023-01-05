<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <!-- New -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--        <link rel="stylesheet" href="{{asset("./assets/css/tailwind.output.css")}}" />--}}
{{--        <script--}}
{{--            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"--}}
{{--            defer--}}
{{--        ></script>--}}
{{--        <script src="{{asset("./assets/js/init-alpine.js")}}"></script>--}}
{{--        <link--}}
{{--            rel="stylesheet"--}}
{{--            href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"--}}
{{--        />--}}
{{--        <script--}}
{{--            src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"--}}
{{--            defer--}}
{{--        ></script>--}}
{{--        <script src="{{asset("./assets/js/charts-lines.js")}}" defer></script>--}}
{{--        <script src="{{asset("./assets/js/charts-pie.js")}}" defer></script>--}}
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
