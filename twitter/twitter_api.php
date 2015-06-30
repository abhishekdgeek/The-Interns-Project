/* status update in twitter */
<?php
function statusupdate()
{
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);
/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/

$url = 'https://api.twitter.com/1.1/statuses/update.json';

$requestMethod = 'POST';
/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'status'=>'YOUR STATUS HERE'
 
);
/** Perform the request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();
}
			 ?>

/* autotweet in twitter */
<?php
function autotweet()
{
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);
/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/statuses/retweet/id_of_status.json';

$requestMethod = 'POST';
/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
  
   'id'=>'id of status to be retweeted'
);
/** Perform the request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();
}
			 ?>

/* autoreply in twitter */
<?php
function autoreply()
{
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);
/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/

$url = 'https://api.twitter.com/1.1/statuses/update.json';

$requestMethod = 'POST';
/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
   
    'status'=>'@username message'  ,                                         // eg: '@guptapriyanka09 good',
    'in_reply_to_status_id'=>'status id'

);
/** Perform the request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();

}
?>