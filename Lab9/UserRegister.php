<?php

if(isset($_POST["idRegistro"])){

    $servidor = "localhost";
    $usuario = "root";
    $password ="123456";
    $bd ="datauser";
    $mysqli = new mysqli($servidor, $usuario, $password, $bd);

    if($mysqli->connect_error){
        die ("Error connecting to the database". $mysqli->connect_error);
    }
    
    $user =$_POST["user"];
    $user_type =$_POST["user_type"];
    $password =sha1($_POST["password"]);

    $buscarUsuario="SELECT * FROM userdata u WHERE u.user ='$user'";
    $resultado = $mysqli->query($buscarUsuario);
    $count = mysqli_num_rows($resultado);
    
    if($count==1){
       echo "<br/> The User Name is already in use <br/>";
       echo "<a  href ='UserRegister.html'>Please choose another username </a>" ;
    }else{
     $insertarUsuario="INSERT INTO `userdata`(`user`,`user_type`,`password`)VALUES('$user','$user_type','$password');
        ";

        if($mysqli->query($insertarUsuario)==true){
            echo "<br/>"."<h1>"."User Created correctly"."<h1>";
            echo "<h3>"." "."<a href='UserRegister.html'>Register another user </a>"."</h3>";
            
        }else{
            mysqli_close($mysqli);
            echo "Error creating user".$insertarUsuario."<br>".$mysqli->error;
            

        }
    }
}    

?>
