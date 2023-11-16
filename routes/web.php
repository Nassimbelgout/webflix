<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
   


//{friend} = Paramètre obligatoire
//{friend?} = Paramètre optionel
//HomeController->friend
Route::get('/fiorella/{friend?}',[AboutController::class, 'friend']);
    
    //AboutController -> index


Route::get('/a-propos/{user?}', function(Request $request,$user = null){
    return view('a-propos',[
        'title'=> 'webflix',
        'team' => [
            [
                'name' => 'Fiorella',
                'job' => 'CEO',
                'image' => 'https://i.pravatar.cc/150?u=fiorella',
            ],
            [
                'name' => 'Toto',
                'job' => 'CTO',
                'image' => 'https://i.pravatar.cc/150?u=remi',
                
            ],
        ],
        
    ]
        
    );
});
