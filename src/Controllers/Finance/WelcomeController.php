<?php

namespace Innowaysit\Finance\Controllers\Finance;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('finance::welcome');
    }
}
