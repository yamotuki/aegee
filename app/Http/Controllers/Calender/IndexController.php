<?php
/**
 * Created by PhpStorm.
 * User: tomoya_suzuki
 * Date: 2018/11/23
 * Time: 11:26
 */

namespace App\Http\Controllers\Calender;


use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class IndexController extends Controller
{
    public function getCalendarDates(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');

        $dateStr = sprintf('%04d-%02d-01', $year, $month);
        $date = new Carbon($dateStr);
        // カレンダーを四角形にするため、前月となる左上の隙間用のデータを入れるためずらす
        $date->subDay($date->dayOfWeek);
        // 同上。右下の隙間のための計算。
        $count = 31 + $date->dayOfWeek;
        $count = ceil($count / 7) * 7;
        $dates = [];

        for ($i = 0; $i < $count; $i++, $date->addDay()) {
            // copyしないと全部同じオブジェクトを入れてしまうことになる
            $dates[] = $date->copy();
        }

        return view('top', [
            'year' => $year,
            'month' => $month,
            'dates' => $dates,
            'currentMonth' => $month
        ]);
    }
}