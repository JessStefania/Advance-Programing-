<?php

if(isset($_POST["idRegistro"])){

    $servidor = "localhost";
    $usuario = "root";
    $password ="123456";
    $bd ="datauser";
    $mysqli = new mysqli($servidor, $usuario, $password, $bd);

    if($mysqli->connect_error){
        die ("Error when connecting to the database". $mysqli->connect_error);
    }
    
    $user =$_POST["user"];
    $password =sha1($_POST["password"]);
    
    
    $buscarUsuario="SELECT * FROM userdata u WHERE u.user ='$user'";
    $buscarPassword="SELECT * FROM userdata p WHERE p.password ='$password' ";
    $resultado1 = $mysqli->query($buscarUsuario);
    $resultado2 = $mysqli->query($buscarPassword);
    $count = mysqli_num_rows($resultado1);
    $count2 = mysqli_num_rows($resultado2);

    if(($count==1) && ($count2 ==1)){
        echo "<br/> The user is registered <br/>";
        echo "<a  href ='searchUser.html'> Search another username </a>" ;
     }else{
 
        echo "<br/> User does not exist <br/>";
        echo "<a  href ='searchUser.html'> Search another username </a>" ;
    }     


}
?>
