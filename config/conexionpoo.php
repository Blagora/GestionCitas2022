<?php
    require_once 'conf.php';
    class conectar{
        public $_bd;

        function __construct(){
            $this->_bd=new mysqli(server,user,pass,bd);
            if($this->_bd->connect_errno){
                echo "Fallo la conexion".$this->_bd->connect_errno;
                return; 
            }
            $this->_bd->set_charset(DB_charse);
        }
    }
?>