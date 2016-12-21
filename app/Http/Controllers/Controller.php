<?php

namespace coeneo\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use coeneo\Http\Requests\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function contacto(Request $request){
    	dd("Hola");
    }
    public function productos(Request $request){
    	return view('index/productos');
    }
}
