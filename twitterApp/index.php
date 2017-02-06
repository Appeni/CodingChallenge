<?php
require "twitterapi.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<head><title>Appeni coding challenge data</title></head>

<body>

<h1>Twitter Data</h1>

 <!--prints $isFollow to page-->


         <form method = "post" action = "twitterapi.php">
           <h2>Enter the Twitter handle (without '@') below to see if you follow the account </h2>
             <input type = "text" name = "isFollowTarget" placeholder="Handle">
             <input type = "submit">
         </form>

         <form method = "post" action = "twitterapi.php">
           <h2>Enter a target handle (without '@') and a tweet ID to check for retweet </h2>
             <input type = "text" name = "targetHandle" placeholder="Handle">
             <input type = "text" name = "tweetID" placeholder="Tweet ID">
             <input type = "submit">
         </form>

         <form method = "post" action = "twitterapi.php">
           <h2>Enter a hashtag (without '#') to see if you've used it </h2>
             <input type = "text" name = "hashtag" placeholder="Hashtag">
             <input type = "submit">*needs debugging
         </form>

         <?php
         //825144087904870401 tweet ID, target handle JanMulderPlano
         // try executiveorders




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
