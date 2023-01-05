<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        return Inertia::render('Admin/Dashboard');

    }
}
