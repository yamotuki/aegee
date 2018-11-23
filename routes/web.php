<?php

Route::namespace('Calender')->group(function () {
    Route::get('/', 'IndexController@getCalendarDates');
});
