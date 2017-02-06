<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// tells you if the user likes a given page. Input is page ID
require "private_index.php";


function jsonToArray($likesFullArray){
  // converts FB JSON output to PHP array
  $likesFullArray = json_decode($likesFullArray, true);
  return $likesFullArray;
}


function idOnlyArray($likesFullArray){
// builds new array of just the names of liked objects
  $arr = array();
  foreach ($likesFullArray as $like){
        $arr[] = $like['id'];
      }
  return $arr;
}

function isIn($target, $arr){
  // searches for $target in array $arr and returns found or not found.
  if (in_array($target, $arr)) {
  return "The user likes the page ".$target."!";
  }
  else {
    return "Sorry, the user has not liked the page ".$target."!";
}
}


$likesFullArray = $user['likes'];
$targetLikeID = $_POST['page_ID'];
$likesFullArray = jsonToArray($likesFullArray);
$ids = idOnlyArray($likesFullArray);
$doesLike = isIn($targetLikeID, $ids);
// echo "<pre>";
// print_r($names);
// echo "</pre>";

   echo '<h4>'.$doesLike.'</h4>';






?>
