<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function home(): view{
        return view('home');
    }

    /**
     * Home URL With Parameters
     * @param string $param1
     * @param int $param2
     * @return \Illuminate\View\View
     */
    
    public function homeWithParam(string $param1, int $param2, string $param3=null): View {
        if ($param3!=null){
            return view('home1', [
                'param1' => $param1,
                'param2' => $param2,
                'param3' => $param3
            ]);

        }
        return view('home1', [
            'param1' => $param1,
            'param2' => $param2
        ]);
    }
    public function homeWithOptionalParam(){

    }

}
