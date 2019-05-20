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
    private function callAPI($url){
        try {
            $curl =curl_init($url);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            $data = curl_exec($curl);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return $data;
    }
    public function getRecentMedia($user_id, $limit = 10)
    {
     
            $data = $this->callAPI($this->endpoint . "users/$user_id/media/recent/?access_token={$this->options['access_token']}&count=$limit");
            #$curl = curl_init($this->endpoint . "users/$user_id/media/recent/?client_id={$this->options['client_id']}&count=$limit");
            $json = json_decode($data);
        if($json->meta->code != 200){
            throw new Exception($json->meta->error_message, $json->meta->code);
        }
        return $json->data;
    
    }

}