<?php

Route::get('kuttumiah/calculator/add/{a}/{b}', 'Kuttumiah\Calculator\Http\Controllers\CalculatorController@add')->name('kuttumiah.calculator.add');
Route::get('kuttumiah/calculator/subtract/{a}/{b}', 'Kuttumiah\Calculator\Http\Controllers\CalculatorController@subtract')->name('kuttumiah.calculator.subtract');
