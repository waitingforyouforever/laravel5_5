<?php

Route::group(['middleware' => 'web', 'prefix' => 'monitor', 'namespace' => 'Modules\Monitor\Http\Controllers'], function()
{
    Route::get('/', 'MonitorController@index');
});
