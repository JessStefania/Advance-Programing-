<!-- instagram for Authentication -->
<?php
require "instagram.php";
$instagram = new Instagram([
    'client_id'=>'6e0780c12e564355bda0f62494dcc42e',
    'access_token'=>'926143731.1677ed0.4f759a227895452882433d1421e0822d'
]);
 try {
        $medias = $instagram->getRecentMedia(926143731);
    
    }catch(Exception $e) {
        die($e->getMessage());
}
    var_dump($medias);
    die();




$user_id = 926143731;
$client_id= "6e0780c12e564355bda0f62494dcc42e";
$access_token="926143731.1677ed0.4f759a227895452882433d1421e0822d";
$limit=6;
$endpoint= "https://api.instagram.com/v1/users/$user_id/media/recent/?access_token=$access_token&count=$limit";
#$endpoint= "https://api.instagram.com/v1/users/$user_id/media/recent/?client_id=$client_id&count=$limit";
try{
    $curl = curl_init($endpoint);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    $data = json_decode(curl_exec($curl));
}catch(Exception $e){
    die($e->getMessage());
}
 if($data->meta->code == 200) {
    echo"<p> Las imagenes fueron recuperadas con Exito desde Instagram</p>";
    foreach ($data->data as $image) {
        if($image->type == 'image')  {
            echo"<img src='{$image->images->standard_resolution->url}'width='100'>";
        var_dump($image);
        }
    }
 }else {
    echo"<p> Imposible Recuperar las imagenes desde Instagram</p>";  
 }
 var_dump($data);