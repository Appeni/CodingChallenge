<?php
// appending functions of the Facebook class with stuff to perform methods
// requested by Appeni for their challenge
require_once(__DIR__.'/php-graph-sdk-5.0.0/src/Facebook/Facebook.php');

class fbRequest extends Facebook\Facebook{

//returns query objects ($fbObject) like user_likes, photos, etc.
  public function response($fbObject, $accessToken){
    $data = $this->get($fbObject, $accessToken);
    return $data;
  }

//returns user likes as array of names only. Input is original array of likes
  public function stringToArray($jsonString){

    // converts FB JSON output to PHP array
    $jsonString = json_encode($jsonString, true);
    $newArray = json_decode($jsonString, true);
    return $newArray;

  }
}



?>
