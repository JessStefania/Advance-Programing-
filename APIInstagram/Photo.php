<!-- instagram for Authentication -->
<?php
require "instagram.php";

$instagram = new Instagram([
    'client_id'=>'6e0780c12e564355bda0f62494dcc42e',
    'access_token'=>'926143731.1677ed0.4f759a227895452882433d1421e0822d'
]);
 try {
        $medias = $instagram->getRecentMedia(926143731, 5);
        echo"<p> Las imagenes fueron recuperadas con Exito desde Instagram</p>";
         foreach ($medias as $media) {
          echo"<img src='{$media->images->standard_resolution->url}'
           width='100'>"; 
         }

    } catch(Exception $e) {
        die($e->getMessage());
}
