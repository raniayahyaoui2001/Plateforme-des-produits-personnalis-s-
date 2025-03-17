<?php
    require_once("connex.php");
    class favori extends connexion 
{
        private $id_fav;
        private $id_produit;
        private $id_user;
       

        public function getId(){
            return $this->id;
        }
        public function getIdProd(){
            return $this->id_produit;   
        }
        public function setIdProd($m){
            $this->id_produit=$m;
       }

       public function getIdUser(){
        return $this->id_user;   
    }
    public function setIdUser($n){
        $this->id_user=$n;
   }
   
       
    public function editAll(){
        $res=$this->cnx()->query("SELECT * from favoris");
        //Extraire (fech) toutes les lignes 
        $les_com= $res->fetchAll();
        return $les_com;
    }

    public function findById($idu,$idp){
        $res=$this->cnx()->query("SELECT count(*) from favoris where id_user=$idu and id_produit=$idp ");
        //Extraire (fech) toutes les lignes 
        $nbr= $res->fetch();
        return $nbr;
    }

    public function ajouter(){
        if(!isset($this->id_produit) || !isset($this->id_user)  )
        return false;
        $q = "INSERT INTO favoris (id_produit,id_user) VALUES ('$this->id_produit','$this->id_user')";
        $stmt = $this->cnx()->exec($q);
        if(!$stmt)
            echo('echec insertion'.$this->cnx()->errorInfo());
        else{
            $r= 1;
            return $r;
        }
    }

    public function supprimer($id){
        $q="DELETE FROM favoris WHERE id_produit= $id";
        $stmt=$this->cnx()->exec($q);
        if(!$stmt)
            echo('echec de suppression'.$this->cnx()->errorInfo());
        else 
        return $stmt;
    }
}
?>