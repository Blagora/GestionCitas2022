<?php

    require_once "../config/conexionpoo.php";
    class consultorio extends conectar{
        protected $Numconsul;
        protected $Nombreconsul;

        public function __construct(){
            parent::__construct();
        }
        public function regconsultorio($Numconsul,$Nombreconsul){
            $sql1="SELECT * FROM consultorios Where NumeroC='$Numconsul'";
            $resultado=$this->_bd->query($sql1);
            $fila=mysqli_fetch_assoc($resultado);
            if($fila>0){
                echo "<script>alert(\"Consultorio ya registrado\");
                window.location='../view/fconsultorio.php';</script>";
            }
            else{
                $sql="insert into consultorios(NumeroC,NombreC) values('".$Numconsul."','".$Nombreconsul."')";
                $resultado=$this->_bd->query($sql);
                if(!$resultado){
                    print "<script>alert(\"fallo al ingresar los datos.\");
                    window.location='../view/fconsultorio.php';</script>";
                    $resultado->close();
                    $this->_bd->close();
                }
                else{
                    return $resultado;
                    print "<script>alert(\"consultorio registrado\");
                    window.location='../view/fconsultorio.php';</script>";
                    $resultado->close();
                    $this->_bd->close();
                }
            }
        }
        public function listaconsultorios(){
            $sql="select * from consultorios order by NumeroC";
            $resultado=$this->_bd->query($sql);
            if($resultado->num_rows>0){
                while($row=$resultado->fetch_assoc()){
                    $resultadoset[]=$row;
                }
            }
            return $resultadoset;
        }  
        public function eliminarconsultorios(){
            $query="delete from conssultorios where NumeroC='$id'";
            $resultado=$this->_bd->query($sql);
            if(!$resultado){
                print "<script>alert(\"Consultorio no eliminado\");
                window.location='../view/fconsultorio.php'</script>"
            }
        }
    }

?>