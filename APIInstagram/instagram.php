<?php
class Instagram {
    private $options = [
       'client_id' => '',
       'access_token' => '',
       'client_secret' => ''
    ];
    private $endpoint = "https://api.instagram.com/v1/";

    public function __construct($options){
        $this->options = array_merge($this->options, $options);

    }
    public function getRecentMedia($user_id, $limit = 10)
    {
        try{
            $curl = curl_init($this->endpoint . "users/$user_id/media/recent/?access_token={$this->options['access_token']}&count=$limit");
            #$curl = curl_init($this->endpoint . "users/$user_id/media/recent/?client_id={$this->options['client_id']}&count=$limit");
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            $data = curl_exec($curl);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
        $json =json_decode($data);
        var_dump($json);
        die();
    }
}