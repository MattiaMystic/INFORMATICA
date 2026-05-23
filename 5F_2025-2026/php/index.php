<?php
require __DIR__ . '/vendor/autoload.php';

$client= new \GuzzleHttp\Client(["base_uri" => "https://jsonplaceholder.typicode.com/"]); //Base dell'ENDPOINT con base_uri

try{
    $response = $client->request('GET', 'todos/'); //Endpoint specifico con metodo GET
    //$code = $response->getStatusCode();
    $data = json_decode($response->getBody(), true);
    foreach ($data as $todo){
        echo 'userID'.$todo['userID'].'<br>';
        echo 'id'.$todo['id'].'<br>';
        echo 'title'.$todo['title'].'<br>';
        echo '<br>';
    }


}catch (\GuzzleHttp\Exception\ClientException $e){

}