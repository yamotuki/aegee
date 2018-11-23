<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>スポーツ観戦行くぜ！</title>
</head>

<body>
<header>
</header>
<main>
    <h1>{{ $year }} 年 {{ $month }} 月のカレンダー</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            @foreach (['日', '月', '火', '水', '木', '金', '土'] as $dayOfWeek)
                <th>{{ $dayOfWeek }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        <?php /** @var \Carbon\Carbon $date */ ?>
        @foreach ($dates as $date)
            {{-- 日曜始まり--}}
            @if ($date->dayOfWeek == 0)
                <tr>
            @endif

            <td @if ($date->month != $currentMonth) style="color: gray"@endif>
                {{ $date->day }}
            </td>

            {{-- 土曜で折り返し --}}
            @if ($date->dayOfWeek == 6)
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</main>
　　
<footer></footer>
　　　　　
</body>
</html>
