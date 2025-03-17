<?php
    require_once("connex.php");
    class contacts extends connexion {
        private $id;
        private $nom_complet;
        private $email;
        private $message;
       

        public function getId(){
            return $this->id;
        }
        public function getnom(){
            return $this->nom_complet;   
        }
        public function setnom($m){
            $this->nom=$m;
       }
        public function getemail(){
            return $this->email;    
        }
        public function setemail($d){
            $this->email=$d;
        }
        public function getmessage(){
            return $this->message;    
        }
        public function setmessage($d){
            $this->message=$d;
        }

        public function editAll(){
            $res=$this->cnx()->query("SELECT * from contact");
            //Extraire (fech) toutes les lignes 
            $les_com= $res->fetchAll();
            return $les_com;
        }
    }
?>