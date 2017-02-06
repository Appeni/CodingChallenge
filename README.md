# Appeni Coding Challenge

A client asks you to gather information linked to social media accounts of a particular user. The architecting engineer has given you the following specifications. Anything that is not listed is considered optional and up to your experience & time management.

Write JSON API endpoints that do the following:

1. Given a facebook page, post, or photo, return a value indicating whether a particular user liked or shared that page, post, or photo.

1. Given a twitter handle, post, page, photo, or hashtag, return a value indicating whether a particular user is following that handle, retweeted a post, tweeted with a hashtag, or shared the photo.

1. Given a google plus profile, return a value indicating whether a particular user is following the profile.

1. Given an instagram profile, return a value indicating whether a particular user is following the profile.

1. Submit a photo/video on behalf of an instragram user.

1. Comment on a video on behalf of a youtube user.

1. Subscribe to a channel on behalf of a youtube user.

1. Given a youtube video, determine if a particular user has watched the video.

## Notes
- Language must be PHP.
- If storing information is necessary, use a MySQL database.
- Using a framework is optional.

##Eric's Notes
1. Thanks for the opportunity to do this. I spent most of my time overcoming some big learning curves. Namely, how to connect to the Facebook SDK.
1. Facebook app viewable at http:1. ericrmcclellan.com/CodingChallenge/facebookApp/index.php .
1. Twitter app viewable at http:1. ericrmcclellan.com/CodingChallenge/twitterApp/index.php .
1. My OOP organization suffered greatly on the Facebook implementation. I got confused on instantiating a class and then calling methods from that class in another page. Possibly due to my brain frying.
1. In the past 36 hours I've only completed functionality for Twitter and Facebook APIs. I figured I'd rather have some working functionality for two than a bunch of pieces of random code for everything. If I were to continue working, things would speed up greatly due to what I've learned so far.
1. You'll need to change the absolute URLs in the Facebook SDK to get it to work, and you'll have to enter your own credentials from your own facebook app.

##Some of Eric's questions
1.  Can I simplify twitterapi.php? Would it be simpler to call the functions directly from index.php?
  or do I have to instantiate the classes somewhere else first? And why can't I declare the values
  of the variables here and then pass them to twitterapi.php? It doesn't give me the same output.
1.  how to print error codes and statements?
1.  Debug $hashtagged?
1.  Learn composer?
