<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CenixController extends Controller
{
    
    

    //RUTA RAIZ
    //$cenix = Cenix::paginate();
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function mantenimiento(){
        return view('mantenimiento');
    }
    public function proyectos(){
        return view('proyectos');
    }
    public function servicios(){
        return view('servicios');
    }
    public function software(){
        return view('software');
    }
    public function soluciones(){
        return view('soluciones');
    }
    //FORMULARIOS
    public function store(Request $request){
        $customer= new Customer();
        $customer->Nombre = $request->Nombre;
        $customer->Email = $request->Email;
        $customer->Tema = $request->Tema;
        $customer->Mensaje = $request->Mensaje;

        $customer->save();

        return view('index');

    }


    //ELEMENTOS PARTICULARES
    public function show($NuestrosProyectos,$Software=null){
        if ($Software) {
            return "Bienvenido a la seccion $NuestrosProyectos, Podras ver nuestra categoria $Software, de las muchas que tenemos";
        }else{
            return "Bienvenido a la seccion $NuestrosProyectos, explora nuestros proyectos";
        }
    }

}
