<?php
require "private_index.php";
$likesFullArray = $user['likes'];
$targetLikeID = $_POST['page_ID'];

function jsonToArray($likesFullArray){
  // converts FB JSON output to PHP array
  $likesFullArray = json_decode($likesFullArray, true);
  return $likesFullArray;
}
$likesFullArray = jsonToArray($likesFullArray);

function idOnlyArray($likesFullArray){
// builds new array of just the names of liked objects
  $arr = array();
  foreach ($likesFullArray as $like){
        $arr[] = $like['id'];
      }
  return $arr;
}
$ids = idOnlyArray($likesFullArray);

function isIn($target, $arr){
  if (in_array($target, $arr)) {
  return "The user likes the page ".$target."!";
  }
  else {
    return "Sorry, the user has not liked the page ".$target."!";
}
}
$doesLike = isIn($targetLikeID, $ids);
// echo "<pre>";
// print_r($names);
// echo "</pre>";

   echo '<h4>'.$doesLike.'</h4>';






?>
