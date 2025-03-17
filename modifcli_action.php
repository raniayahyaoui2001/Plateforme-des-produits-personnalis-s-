<?php
    require_once("client.php");
    $client=new client();
    $id=$_REQUEST['dd'];
    $res = $client->cnx()->query("SELECT * from client where id_client=$id");
    $la_client=$res->fetch();
    $la_client[1]=$_POST['nom'];
    $la_client[2]=$_POST['image'];
    $la_client[3]=$_POST['description'];
    $client->setnom($la_client[1]);
    $client->setimage($la_client[2]);
    $client->setdescription($la_client[3]);
    $r=$client->modifier($id);
    if($r)
    {
        header("location:list-client.php");
    }  
    else 
    {
        echo "echec de modificationn";
    }
        
   
?>