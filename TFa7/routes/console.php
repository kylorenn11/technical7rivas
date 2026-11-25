<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('pos:about', function () {
    $this->comment('Ron Rivas TFA7 Laravel application is ready.');
})->purpose('Display a short project status message');
