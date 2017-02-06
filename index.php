<?php
require "twitterApp/twitterapi.php";

echo '<head><title>Appeni coding challenge data</title></head>';

echo '<body>';
echo '<h1>Facebook Data</h1>';




echo '<h1>Twitter Data</h1>';

 // prints $isFollow to page
 echo '<h2>Does the API user follow @'.$isFollowTarget.'?<h2>';
    echo '<h4>'.$isFollow.'</h4>';

// prints $retweeted to page
    echo '<h2>Has @'.$targetHandle.' retweeted the given Tweet ID?<h2>';
       echo '<h4>'.$retweeted.'  NB: have not debugged this.</h4>';

// prints $hashtagged to page
    echo '<h2>Has the API user tweeted with the hashtag #'.$hashtag.'?<h2>';
          echo '<h4>'.$hashtagged.'</h4>';


// Questions:
// Can I simplify twitterapi.php? Would it be simpler to call the functions directly from index.php?
// or do I have to instantiate the classes somewhere else first? And why can't I declare the values
// of the variables here and then pass them to twitterapi.php? It doesn't give me the same output.
//
// how to print error codes and statements?
//
// Debug $hashtagged?
//
// Learn composer?



    ?>
