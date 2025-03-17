<?php
    require_once("connex.php");
    class client extends connexion {
        private $id_client;
        private $nom;
        private $image;
        private $description;
       

        public function getId(){
            return $this->id_client;
        }
        public function getnom(){
            return $this->nom;   
        }
        public function setnom($m){
            $this->nom=$m;
       }
        public function getimage(){
            return $this->image;    
        }
        public function setimage($d){
            $this->image=$d;
        }
        public function getdescription(){
            return $this->description;    
        }
        public function setdescription($des){
            $this->description=$des;
        }
       


        public function editAll(){
            $res=$this->cnx()->query("SELECT * from client");
            //Extraire (fech) toutes les lignes 
            $les_com= $res->fetchAll();
            return $les_com;
        }
/////////////////////à réctifier
        public function ajouter(){
            if(!isset($this->nom) || !isset($this->image) )
            return false;
            $q = "INSERT INTO categorie (nom,image) VALUES ('$this->nom','$this->image')";
            $stmt = $this->cnx()->exec($q);
            if(!$stmt)
                echo('echec insertion'.$this->cnx()->errorInfo());
            else{
                $r= 1;
                return $r;
            }
        }
       

       
    }
?>