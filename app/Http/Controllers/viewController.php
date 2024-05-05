<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class viewController extends Controller
{
    public function mainView(){
        $ipAddress = request()->ip();
        Visit::create(['ip_address' => $ipAddress]);
        return view('main');

    }
}
