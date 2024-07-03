<?php
    class Conexion{
        private $Host = "localhost";
        private $Data = "App_Parking";
        private $User = "root";
        private $Pass = "";

        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->Host.";dbname=".$this->Data,$this->User,$this->Pass);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>