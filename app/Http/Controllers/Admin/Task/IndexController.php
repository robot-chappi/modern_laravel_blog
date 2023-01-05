<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        return Inertia::render('Admin/Task/Create');

    }
}
