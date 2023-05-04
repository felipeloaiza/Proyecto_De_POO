<?php

if(isset($_POST['submit'])) {

     if(isset($_POST['usr'])) {
        
        include_once('class.php');
        $user = $_POST ['usr'];
        $pass = $_POST ['pss'];
        $Area = $_POST ['Alum'];
        $Area2 = $_POST['Profe'];
        $loguin = new Loguin ();
        $loguin->entrarDatos($user,$pass,$Alum,$Profe);
        $loguin->loguear();
        $response = $loguin->loguear();

        if($response === "P") {
            $_SESSION["Profesor"] = $Profesor;
            header("Location: ../index.php");
            //echo '<script language="javascript">alert("Error en datos"); </script>';
        }

        if($response === "A") {
            $_SESSION["Alumno"] = $Alumno;
            header("Location: ../index.php");
            //echo '<script language="javascript">alert("Error en datos"); </script>';
        }

        else{
            echo '<script language="javascript">alert("Error en datos"); </script>';
        }
     }
}

