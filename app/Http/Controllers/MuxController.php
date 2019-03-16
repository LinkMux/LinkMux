<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuxController extends Controller
{
    /**
     * @param string $path
     * @return string
     */
    public function index(string $path)
    {
        return $path;
    }

    /**
     * Redirect to dashboard page.
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function dashboard()
    {
        return redirect('/dashboard');
    }
}
