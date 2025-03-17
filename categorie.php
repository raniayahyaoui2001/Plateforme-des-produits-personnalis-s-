<?php
    require_once("connex.php");
    class categorie extends connexion {
        private $id_categorie;
        private $nom;
        private $image;
       

        public function getId(){
            return $this->id_categorie;
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
       

        public function ajouter(){
            if(!isset($this->nom) || !isset($this->image))
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

        public function editAll(){
            $res=$this->cnx()->query("SELECT * from categorie");
            //Extraire (fech) toutes les lignes 
            $les_com= $res->fetchAll();
            return $les_com;
        }

        public function supprimer($id){
            $q="DELETE FROM categorie WHERE id_categorie= $id";
            $stmt=$this->cnx()->exec($q);
            if(!$stmt)
                echo('echec de suppression'.$this->cnx()->errorInfo());
            else 
            return $stmt;
        }
        
        public function editBy($id){
            $q = "SELECT * FROM categorie WHERE id_categorie=$id";
            $res = $this->cnx()->query($q);
            $la_com=$res->fetch();
            return $la_com;
        }

        public function modifier($id)
        {
            $m=$this->getnom();
            $d=$this->getimage();
            $q="UPDATE categorie SET nom='$m' , image='$d' WHERE id_categorie=$id";
            $stmt=$this->cnx()->exec($q);
            return $stmt;
        }
    }
?>