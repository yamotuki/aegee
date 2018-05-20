<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    　　
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
        }

        header {
            position: fixed;
            top: 5px;
            left: 5px;
            z-index: 2;
            width: 100%;
            transition: .3s;
            background-color: #00bfa5;
        }
        footer {
            top: 5px;
            left: 5px;
            background-color: #1b1e21;
            opacity: 0.3;

        }

    </style>
</head>
<body>
<header>
    header test
</header>
<nav>

</nav>
<main>
    <h1>top page </h1>
    <?php $contents = [1, 2, 3]; ?>
    @foreach ($contents as $content)
        <p>{{ $content }}</p>
    @endforeach

</main>
　　
<footer>
    　　 デザイン参考サイト（仮）：https://www.lazyoaf.com/
</footer>
　　　　　
</body>
</html>
