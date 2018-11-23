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

class IndexController extends Controller
{
    public function getCalendarDates(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');

        // 各月の一日から始める
        $dateStartDay = new Carbon(sprintf('%04d-%02d-01', $year, $month));

        // 日曜始まりにする
        $date = $dateStartDay->subDay($dateStartDay->dayOfWeek);

        // 終わりを土曜日にするために表示日数調整
        $maximumDaysOfCalender = 31 + $date->dayOfWeek;
        $daysOfCalender = ceil($maximumDaysOfCalender / 7) * 7;

        $dates = [];
        for ($i = 0; $i < $daysOfCalender; $i++, $date->addDay()) {
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