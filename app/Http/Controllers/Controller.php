<?php
namespace coeneo\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use coeneo\Http\Requests\Request;
use coeneo\Http\Mail\Contacto;
use Laracasts\Flash\Flash;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function contacto(Request $request){
    	Mail::to("no-replay@productosalimenticioscoeneo.com")->send(new \coeneo\Mail\Contacto($request));
    	Flash::overlay("¡Gracias por su mensaje!","En breve estarémos contactandote");
    	return redirect()->route('index');
    }
    public function productos(Request $request){
    	return view('index/productos');
    }
}
