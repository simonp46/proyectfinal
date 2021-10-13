<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Home extends BaseController
{
    public function index()
    {
        $crud = new CrudModel();
        $datos = $crud->listarPacientes();
        $mensaje = session('mensaje');
        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('index');
    }
    public function form()
    {
        return view('form');
    }
    public function nuevacita()
    {
        return view('nuevacita');
    }
    public function vercita()
    {
        return view('vercita');
    }


    public function crear()
    {

       $datos = [
        "idpaciente" => $_POST['Identif'],
        "nombres" => $_POST['name'],
        "apellidos" => $_POST['lastname'],
        "telefono" => $_POST['tel'],
        "correo" => $_POST['email'],
        
    ];

       $crud = new CrudModel();
       $respuesta = $crud->insertar($datos);

       if ($respuesta > 0)
       {
           return redirect()->to(base_url().'/nuevacita')->with('mensaje','1');
       } else {
            return redirect()->to(base_url().'/')->with('mensaje','0');
       }
    }

    public function eliminar($Identificacion)
    {
        $crud = new CrudModel();
        $data = ["identificacion" => $Identificacion];
        $respuesta = $crud->eliminar($data);

        if ($respuesta ){
            return redirect()->to(base_url().'/')->with('mensaje','4');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje','5');
        
        } 
    }
    Public function editar($Identificacion)
    {
        $datos = [
            "identificacion" => $_POST['Identificacion'],
            "nombre" => $_POST['Nombre'],
            "sintomas" => $_POST['Sintomas'],
            
        ];
 
        $crud = new CrudModel();
        $respuesta = $crud->insertar($datos);

        if ($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje','1');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
     
    }
    Public function formulario()
    {
      return("app/Views/formulario.php");
    }









    public function index1()
    {
        $crud = new CrudModel();
        $datos = $crud->listarEnfermeros();
        $dato=[
            "datos"=>$datos
        ];
        return view('index1',$dato);
    }
    public function guardar1()
    {
       $datos = [
           
           "idenfermero" => $_POST['idenfermero'],
           "nombre" => $_POST['nombre'],
          
       ];

       $crud = new CrudModel();
       $respuesta = $crud->insertar1($datos);

       if ($respuesta > 0){
           return redirect()->to(base_url().'/')->with('mensaje','1');
       }else{
           return redirect()->to(base_url().'/')->with('mensaje','0');
       }
    }

    public function eliminar1($idenfermero)
    {
        $crud = new CrudModel();
        $data = ["idenfermero" => $idenfermero];
        $respuesta = $crud->eliminar1($data);

        if ($respuesta ){
            return redirect()->to(base_url().'/')->with('mensaje','4');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje','5');
        
        } 
    }
    Public function editar1($idenfermero)
    {
        $datos = [
            "idenfermero" => $_POST['idenfermero'],
            "nombre" => $_POST['nombre'],
            
        ];
 
        $crud = new CrudModel();
        $respuesta = $crud->insertar($datos);

        if ($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje','1');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
     
    }





    public function index2()
    {
        $crud = new CrudModel();
        $datos = $crud->listarPacientes();
        $dato=[
            "datos"=>$datos
        ];
        return view('index2',$dato);
    }
    public function guardar2()
    {
       $datos = [

           "identificacion" => $_POST['Identificacion'],
           "nombre" => $_POST['Nombre'],
           "sintomas" => $_POST['Sintomas'],
       ];

       $crud = new CrudModel();
       $respuesta = $crud->insertar2($datos);

       if ($respuesta > 0){
           return redirect()->to(base_url().'/')->with('mensaje','1');
       }else{
           return redirect()->to(base_url().'/')->with('mensaje','0');
       }
    }

    public function eliminar2($Identificacion)
    {
        $crud = new CrudModel();
        $data = ["identificacion" => $Identificacion];
        $respuesta = $crud->eliminar2($data);

        if ($respuesta ){
            return redirect()->to(base_url().'/')->with('mensaje','4');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje','5');
        
        } 
    }
    Public function editar2($Identificacion)
    {
        $datos = [
            "identificacion" => $_POST['Identificacion'],
            "nombre" => $_POST['Nombre'],
            "sintomas" => $_POST['Sintomas'],
            
        ];
 
        $crud = new CrudModel();
        $respuesta = $crud->insertar($datos);

        if ($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje','1');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
     
    }
    

}

