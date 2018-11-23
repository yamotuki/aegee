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
                @foreach ($dates as $date)
                    @if ($date->dayOfWeek == 0)
                        <tr>
                            @endif
                            <td
                                    @if ($date->month != $currentMonth)
                                    class="bg-secondary"
                                    @endif
                            >
                                {{ $date->day }}
                            </td>
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
