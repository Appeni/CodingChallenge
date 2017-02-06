<?php
// Class for twitter api with functions returning requested Appeni results.
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

  class twitterRequests extends TwitterOAuth{

    // Returns whether or not user follows $targetHandle
    public function handleFollow($targetHandle) {
      // returns relationships between two accounts (user and $targetHandle) as JSON
      $relationshipData = $this->get("friendships/show", ["target_screen_name" => $targetHandle]);

      // converts Twitter output to PHP array
      $relationshipData = json_encode($relationshipData, true);
      $relationshipData = json_decode($relationshipData, true);

      // returns integer value of 'following' from user
      $isFollow =  $relationshipData['relationship']['source']['following'];

      // evaluates following and returns a string
      if($isFollow == 1) {
        return 'The user follows @'.$targetHandle.'!';
      }
      else {
        return 'The user does not follow @'.$targetHandle.'.';
      }
    }



    // returns whether or not another user ($targetID) has retweeted a tweet with ID = "$tweetID".
    public function tweetRetweet($tweetID, $targetHandle) {
      $retweetsData = $this->get("statuses/retweets", ["id" => $tweetID]);
      $retweetsData = json_encode($retweetsData, true);
      $retweetsData = json_decode($retweetsData, true);

      // builds an array of users handles that retweeted $tweetID
      $arr2 = array(
      );

      foreach ($retweetsData as $user){
        $arr2[] = $user['user']['screen_name'];
      }

      // searches $arr2 for $targetHandle (DOES NOT CURRENTLY SEARCH MULTIPLE LEVELS)
      if (in_array($targetHandle, $arr2)) {
      return "@".$targetHandle." has retweeted this tweet.";
      }
      else {
        return "Sorry, @".$targetHandle." has not retweeted this tweet.";

    }
}
    // returns whether a user has tweeted with a given hashtag, as well as the tweet.
    public function hashtagUsed($hashtag) {
      $tweetsData = $this->get("statuses/user_timeline");
      $tweetsData = json_encode($tweetsData, true);
      $tweetsData = json_decode($tweetsData, true);

      // builds an array of users handles that retweeted $tweetID
      $arr2 = array(
      );

      foreach ($tweetsData as $tweet){
        if ($tweet['entities']['hashtags']){

            $arr2[] = $tweet['entities']['hashtags'];

        }
      }


      // searches $arr2 for $targetHandle
      if (in_array($hashtag, $arr2)) {
      return "#".$hashtag." occurs in a tweet!";
      }
      else {
        return "Sorry, #".$hashtag." does not occur in a tweet.";

    }

    // echo '<pre>';
    //   print_r($arr2);
    //   echo '</pre>';
    }


    //returns whether a user has shared a photo or not.
    public function photoShare($userHandle) {

    }
}
?>
