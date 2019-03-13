<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MiApp extends Controller{
   
    public function index(){
        $hora= date("D:M:Y");
        return view("datos.index", ["hora"=> $hora]);
    }
   
    public function about(){
        $hora= date("D:M:Y");
        return view("datos.about", ["hora"=> $hora]);
    }
   
    public function contacto(){
        $hora= date("D:M:Y");
        return view("datos.contacto", ["hora"=> $hora]);
    }
    
    public function productos(Request $request){
        $compra = $request->input("producto_comprado");
        $hora= date("D:M:Y");
        $listadoProductos = DB::table('producto')->get();
        return view("datos.productos"
                , ["listadoProductos" => $listadoProductos
                , "hora"=> $hora
                , "producto_comprado"=> $compra]);
    }
    
}
