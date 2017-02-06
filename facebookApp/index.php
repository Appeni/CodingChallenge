<?php
session_start();
// created using this tutorial: http://www.devils-heaven.com/facebook-php-sdk-5-tutorial/
// and this: https://developers.facebook.com/docs/php/howto/example_facebook_login

// Include the required dependencies.
require_once(__DIR__.'/php-graph-sdk-5.0.0/src/Facebook/autoload.php');

# Set the default parameters
$fb = new Facebook\Facebook([
  'app_id' => '1767155500278948',
  'app_secret' => 'bacdd79f839aad7d257f27fac8e49742',
  'default_graph_version' => 'v2.5',
  'default_access_token' => isset($_SESSION['facebook_access_token']) ? $_SESSION['facebook_access_token'] : '1767155500278948|bacdd79f839aad7d257f27fac8e49742'
]);

try {
  $response = $fb->get('/me?fields=id,name');
  $user = $response->getGraphUser();
  header ("Location: http://localhost:8888/CodingChallenge/facebookApp/private_index.php");//.$_SESSION['fb_access_token']);
  exit; //redirect, or do whatever you want
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  //echo 'Graph returned an error: ' . $e->getMessage();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  //echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

$helper = $fb->getRedirectLoginHelper();
$permissions = ['public_profile', 'user_friends', 'email', 'user_about_me', 'user_actions.books', 'user_actions.fitness', 'user_actions.music', 'user_actions.news', 'user_actions.video', 'user_birthday', 'user_education_history', 'user_events', 'user_games_activity', 'user_hometown', 'user_likes', 'user_location', 'user_managed_groups', 'user_photos', 'user_posts', 'user_relationships', 'user_relationship_details', 'user_religion_politics', 'user_tagged_places', 'user_videos', 'user_website', 'user_work_history', 'read_custom_friendlists', 'pages_show_list'];
$loginUrl = $helper->getLoginUrl('http://localhost:8888/CodingChallenge/facebookApp/login-callback.php', $permissions);
echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
