<?php
    require_once("connex.php");
    class utilisateur extends connexion {
        private $id_user;
        private $nom;
        private $prenom;
        private $image;
        private $email;
        private $mdp;
        private $role;

       

        public function getId(){
            return $this->id_user;
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
        public function setimage($i){
        $this->image=$i;
        }

       public function getprenom(){
        return $this->prenom;    
        }
        public function setprenom($d){
            $this->prenom=$d;
        }

        public function getemail(){
            return $this->email;    
        }
        public function setemail($d){
            $this->email=$d;
        }
        

        public function getmdp(){
            return $this->mdp;    
        }
        public function setmdp($i){
            $this->mdp=$i;
        }

        public function getrole(){
            return $this->role;    
        }
        public function setrole($y){
            $this->role=$y;
        }
        

        public function editAll(){
            $res=$this->cnx()->query("SELECT * from utilisateur");
            //Extraire (fech) toutes les lignes 
            $les_users= $res->fetchAll();
            return $les_users;
        }





        
    }
?>