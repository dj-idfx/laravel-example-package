<?php

use Idfx\Example\Http\Controllers\MyController;

it('has a route', function () {
    $this
        ->get(action([MyController::class, 'index']))
        ->assertOk()
        ->assertSee('Hi from the view in the example package');
});
