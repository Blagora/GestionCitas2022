<?php
    require_once "../config/conexionpoo.php";
    require_once "../model/consultorio.php";
    require_once "../view/fconsultorio.php";

    if(isset($_POST["registroConsul"])){
        $idconsul=$_POST["txtnumc"];
        $nconsul=$_POST["txtnomc"];
        $consul=new Consultorio();
        $reg=$consul->regconsultorio($idconsul,$nconsul);
        if($reg){
            print "<script>alert(\"Consultorio registrado\");
            window.location='../view/fconsultorio.php';</script>";
        }
        else{
            print "<script>alert(\"Consultorio no registrado\");
            window.location='../view/fconsultorio.php';</script>";
        }
    }
?>