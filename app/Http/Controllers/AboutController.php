<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function friend(request $request,$friend = null)
    {
        return View('presentation', [
            'age' => Carbon::parse('2019-12-31')->age,
            'friend' => ucfirst($friend),
            'color' => $request->color,
    
        ]);
    }
    
    
}
