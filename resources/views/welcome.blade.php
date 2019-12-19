<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <carousel :autoplay="true">
                <img src="https://placeimg.com/640/480/any">
                <img src="https://placeimg.com/640/480/any1">
                <img src="https://placeimg.com/640/480/any2">
                <img src="https://placeimg.com/640/480/any3">
                <img src="https://placeimg.com/640/480/any4">
            </carousel>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
