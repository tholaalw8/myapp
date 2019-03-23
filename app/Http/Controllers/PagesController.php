<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

        $tasks = [
                 'Go to the store',
                 'Go to the market',
                 'Go to work',
                 'Go to concert'
                ];
            
            
            
               return view('welcome', [
             'tasks' => $tasks
            
                 ]);

    }





    
}
