<?php
    require_once("connex.php");
    class commande extends connexion {
        private $id;
        private $nom_complet;
        private $email;
        private $tel;
        private $id_categorie;
        private $infos;
        private $id_user;
       

        public function getId(){
            return $this->id;
        }
        public function getnom(){
            return $this->nom_complet;   
        }
        public function setnom($m){
            $this->nom_complet=$m;
       }
        public function getemail(){
            return $this->email;    
        }
        public function setemail($d){
            $this->email=$d;
        }
        public function gettel(){
            return $this->tel;    
        }
        public function settel($d){
            $this->tel=$d;
        }
        public function getinfos(){
            return $this->infos;    
        }
        public function setinfos($i){
            $this->infos=$i;
        }
        public function getIdcateg(){
            return $this->id_categorie;    
        }
        public function setIdcateg($y){
            $this->id_categorie=$y;
        }
        public function getIduser(){
            return $this->id_user;    
        }
        public function setIduser($w){
            $this->id_user=$w;
        }




        public function editAll(){
            $res=$this->cnx()->query("SELECT * from contact_commande");
            //Extraire (fech) toutes les lignes 
            $les_com= $res->fetchAll();
            return $les_com;
        }

        
        public function ajouter(){
            if(!isset($this->nom_complet) || !isset($this->email) || !isset($this->tel) || !isset($this->infos) || !isset($this->id_categorie) )
            return false;
            $q = "INSERT INTO contact_commande (nom_complet,email,tel,infos,id_categorie,id_user) VALUES ('$this->nom_complet','$this->email','$this->tel','$this->infos','$this->id_categorie','$this->id_user')";
            $stmt = $this->cnx()->exec($q);
            if(!$stmt)
                echo('echec insertion'.$this->cnx()->errorInfo());
            else{
                $r= 1;
                return $r;
            }
        }


        public function editAllBy($id) {
            $q = "SELECT * from contact_commande m join categorie c on m.id_categorie=c.id_categorie where m.id_user=$id";
            $res = $this->cnx()->query($q);
            //extraire (fetch toutes les lignes (enregistrement,rows)
                $les_com=$res->fetchAll();
                return $les_com;
            }

    }
?>