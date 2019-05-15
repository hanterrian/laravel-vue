<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="/css/app.css" rel="stylesheet"/>
</head>
<body>

<div id="app">
    <example-component :urldata="{{json_encode($url_data)}}"></example-component>
</div>

<script src="/js/app.js"></script>
</body>
</html>
