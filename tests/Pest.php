<?php

use Idfx\Example\Tests\TestCase;
use Illuminate\Support\Facades\Route;

uses(TestCase::class)
    ->beforeEach(function () {
        Route::example();
    })
    ->in(__DIR__);
