<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    //FORMULARIO Contact
    public function store(Request $request){
        
        //Crea un objeto del modelo Customer basada en la tabla customers de la base de datos
        $comparacionEmail= new Customer();

        // Atrapa los datos enviados por POST del formulario y atoma especificamente el correo
    
        $comparacionEmail->Email = $request->Email;

        //Instancia objeto base de datos
        $dataBaseCustomer= new DB();
        
        //Obtiene del objeto base de datos mediante su metodo tabla la tabla customers y selecciona el registro con el correo 
        //ára compararlo con el correo enviado desde el formulario en Caso de que el Cliente ya exista

        $dataBaseCustomer= DB::table('customers')->where("Email","=",$comparacionEmail->Email)->first();
       
        //Realiza una comparacion si, existe en la variable $dataBaseCustomer un correo significa que ese cliente ya existe en la base de datos por ende si es diferente a NULL
        //saltara los argumentos de la condicion y emprimira al usuario que lo intente nuevamente

        // Si la variable #dataBaseCustomer es igual a NULL significa que ese cliente no existe en la base de datos y procedera a asignar dentro del objeto customer del modelo Customer
        // cada valor recibido desde el formulario de contacto para posterior mente insertarlos en la base de datos en la tabla customers

        //Para mayor informacion consulte la documentacion de Laravel para entender como funcionan los controladores de las rutas y los modelos y objetos
        // de Laravel consulte el ORM Eloquent y como realizar las constulas en caso de actualizaciones futuras

        if ($dataBaseCustomer === null) {
            $customer = new Customer();
            $customer->Nombre = $request->Nombre;
            $customer->Email = $request->Email;
            $customer->Tema = $request->Tema;
            $customer->Mensaje = $request->Mensaje;
            $customer->save();
            echo 
            '
                <script>
                    alert("Gracias por enviarnos sus datos");
                    form.reset();
                </script>
            ';
            return view('index');
            exit();
        }
        echo 
        '
            <script>
                alert("Los datos Ingresados ya se encuentran registrados, porfavor intente otra vez");
                form.reset();
            </script>
        ';
        return view('contact');

    }


}
