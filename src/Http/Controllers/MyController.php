<?php

namespace Idfx\Example\Http\Controllers;

use Illuminate\View\View;

class MyController
{
    public function index(): View
    {
        return view('example-package::index');
    }
}
