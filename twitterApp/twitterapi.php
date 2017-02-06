<?php
// credit for how I learned to access twitter API as well as initial variables: https://www.youtube.com/watch?v=1ItudXGjLpM


// Keys and tokens
$consumer_key = 'ybJRuj1wpO4ZA1Z12Olun1FZp';
$consumer_secret = '8UbEEEh77UGWQoss89V4u8d6wLnnRDPjliYdgmTR1SdzaLU69W';
$access_token = '85150190-tZq66cmsflMprUvcaPEx6SjY8TbbH6CMqs8gcZMwO';
$access_token_secret = 'XLmaiup8NFS2mkcR5xaKFNQoKukCydDYUN26gvwjJu30k';

// Include library
// require "twitteroauth/autoload.php";
// use Abraham\TwitterOAuth\TwitterOAuth;
require "appeniTwitterClass.php";
//possibly switch back to using oauth

// Connect to API
$connection = new twitterRequests($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

// // Get tweets
// $statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

// does user follow $isFollowTarget?
$isFollowTarget = "bad_robot";
$isFollow = $connection->handleFollow($isFollowTarget);

// has $targetHandle retweeted $tweetID?
$targetHandle = "JanMulderPlano";
$tweetID = "825144087904870401";
$retweeted = $connection->tweetRetweet($tweetID,$targetHandle);

// has your account tweeted with $hashtag?
$hashtag = "executiveorders";
$hashtagged = $connection->hashtagUsed($hashtag);
