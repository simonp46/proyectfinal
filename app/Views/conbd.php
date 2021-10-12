<?php
 //0.crear una clase conBd para conectarse con mysql

  class conBd{
      //1. Esta clase no contiene propiedades o atributos

      //2. crear un constructor
      public function __construct(){}

      //3.crear  metodo conectar
      public function Conectar(){
          try{
              //para conexión, necesito el nombre del servidor ; nombre BD, contraseña 
             $conexion = new PDO('mysql:host=localhost;dbname=bdvacunas', 'root', '');
            return($conexion);
          }
          catch(PDOException $mensajeError){
             header('Location:error.php');
          }
      }
     
      public function Consultar($conQuery){
          //1.conectar a la base de datos
          $conexion = $this->Conectar();

          //2.Preparar la base de datos para enviar una consulta sql
          $operacion = $conexion->prepare($conQuery);
          //3.FECTH_ASSOC, enviar los datos en forma de array
           
         $operacion -> setFetchMode(PDO::FETCH_ASSOC);

         //4.Ejecutar la operación

        $resultado = $operacion->execute();

        //5.Retomar los datos solicitados
        return ($operacion->fetchAll());

      }
      public function AgregarRegistro($consultaSQL,$tipoConsulta){
          //1.Conectar a la base de datos
          $conexion= $this->Conectar();
          $conexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

          //2.Preparar la base de datos para ejecutar una consulta sql,que puede ser agregar o puede  ser eliminar
          try{
            $operacion = $conexion->prepare($consultaSQL);
            $resultado = $operacion->execute();

            $this->ClasificarConsulta($tipoConsulta);
          }
          catch(PDOException $MensajeError){
            header('Location:error.php');
            
          }

       }
      public function ClasificarConsulta($tipoConsulta){
        switch($tipoConsulta){
           case 'insert':
                   $_SESSION["mensaje"]="Registro Insertado correctamente";
                   header('Location:../index.php');
                   break;
           case 'delete':
                  $_SESSION["mensaje"]="Registro Eliminado...💀";
                  header('Location:../index.php');
                  break;
           case 'update':
                 $_SESSION["mensaje"]= "Registro Actualizado...";
                  header('Location:../index.php');
                  break;
               
        }
      }

  } 
?>