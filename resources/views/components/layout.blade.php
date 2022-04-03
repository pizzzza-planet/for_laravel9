<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scape=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" async defer></script>
    <title>{{ $title ?? つぶやきアプリ }}</title>
    @stack('css')
</head>
<body class="bg-gray-50">
    {{ $slot }}
</body>
</html>
