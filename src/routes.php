<?php

Route::group([
    'namespace' => 'WTG\Content\Controllers',
    'middleware' => ['web']
], function () {
    Route::get('{page}', 'ContentController@view')->name('custom-page');
});

