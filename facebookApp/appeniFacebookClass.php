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
}





?>
