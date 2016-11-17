<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@section("title")掲示板システム: @show</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset("assets/bootstrap-3.3.7-dist/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield("css")
        @yield("header")
    </head>
    <body class="container">
        @yield("content")

        <script src="{{asset("assets/bootstrap-3.3.7-dist/js/bootstrap.js")}}"></script>
        @yield("js")

    </body>
</html>