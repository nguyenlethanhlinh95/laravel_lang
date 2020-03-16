<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li class="active"> <a href="/home">{{ trans('language.home') }}</a> </li>
    </ul>
    <br>
    <ul>
        <a href="{!! route('user.change-language', ['en']) !!}">English</a>
        <a href="{!! route('user.change-language', ['vi']) !!}">Vietnam</a>
    </ul>
</body>
</html>