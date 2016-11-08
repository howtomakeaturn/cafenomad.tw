<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $file = fopen(storage_path('app/cafe-data.csv'), 'r');

    $cafes = [];

    while (($line = fgetcsv($file)) !== FALSE) {
        if ($line[1] == '請去過的人評分') {
            $line[1] = '';
        }

        $cafes[] = $line;
    }

    fclose($file);

    unset($cafes[0]);

    return view('index', ['cafes' => $cafes, 'navTab' => '/']);
});

Route::get('/discuss', function() {
    return view('discuss', ['navTab' => '/discuss']);
});
