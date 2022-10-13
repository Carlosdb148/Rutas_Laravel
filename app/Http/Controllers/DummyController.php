<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //inyección de dependencias

class DummyController extends Controller
{
    function any(Request $request){ //request tiene que ser el primer parámetro
        $metodo = $request->method();
        return 'any, has llegado por: ' . $metodo;
        
    }
    
    function delete(){ 
        return 'delete';
    }
    
    function get(){ //
        //return 'get' . csrf_token();
        return view('dummy.get');
    }
    
    function post(){
        return 'post';
    }
    
    function put(){
        return 'put';
    }
    
}
