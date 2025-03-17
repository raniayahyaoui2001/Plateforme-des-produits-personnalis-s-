<?php
    require_once("connex.php");
    class produit extends connexion {
        private $id_produit;
        private $nom;
        private $image;
        private $id_categorie;

        public function getId(){
            return $this->id_produit;
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
        public function getIdcateg(){
            return $this->id_categorie;    
        }
        public function setIdcateg($a){
            $this->id_categorie=$a;
        }

        public function ajouter(){
            if(!isset($this->nom) || !isset($this->image) || !isset($this->id_categorie))
            return false;
            $q = "INSERT INTO produit (nom,image,id_categorie) VALUES ('$this->nom','$this->image','$this->id_categorie')";
            $stmt = $this->cnx()->exec($q);
            if(!$stmt)
                echo('echec insertion'.$this->cnx()->errorInfo());
            else{
                $r= 1;
                return $r;
            }
        }

        public function editAll(){
            $res=$this->cnx()->query("SELECT * from produit");
            //Extraire (fech) toutes les lignes 
            $les_com= $res->fetchAll();
            return $les_com;
        }

        public function supprimer($id){
            $q="DELETE FROM produit WHERE id_produit= $id";
            $stmt=$this->cnx()->exec($q);
            if(!$stmt)
                echo('echec de suppression'.$this->cnx()->errorInfo());
            else 
            return $stmt;
        }
        
        public function editBy($id){
            $q = "SELECT * FROM produit WHERE id_produit=$id";
            $res = $this->cnx()->query($q);
            $la_com=$res->fetch();
            return $la_com;
        }

        public function modifier($id)
        {
            $m=$this->getnom();
            $d=$this->getimage();
            $q="UPDATE produit SET nom='$m' , image='$d' WHERE id_produit=$id";
            $stmt=$this->cnx()->exec($q);
            return $stmt;
        }

        public function editAllBy($id) {
            $q = "SELECT * from produit p join favoris f on p.id_produit=f.id_produit where f.id_user=$id";
            $res = $this->cnx()->query($q);
            //extraire (fetch toutes les lignes (enregistrement,rows)
                $les_prod=$res->fetchAll();
                return $les_prod;
            }
    }
?>