<?php

define('APP_ID', '');
define('APP_SECRET', '');
include('connection.php');
//define('REDIRECT_URL','http://solomo.detailsabout.website/priyanka gupta/ins.php');
require_once('lib/facebook/src/Facebook/FacebookSession.php');
 require_once('lib/facebook/src/Facebook/FacebookRequest.php');
 require_once('lib/facebook/src/Facebook/FacebookResponse.php');
 require_once('lib/facebook/src/Facebook/FacebookSDKException.php');
 require_once('lib/facebook/src/Facebook/FacebookRequestException.php');
 require_once('lib/facebook/src/Facebook/FacebookRedirectLoginHelper.php');
 require_once('lib/facebook/src/Facebook/FacebookAuthorizationException.php');
 require_once('lib/facebook/src/Facebook/FacebookAuthorizationException.php');
 require_once('lib/facebook/src/Facebook/GraphObject.php');
 require_once('lib/facebook/src/Facebook/GraphUser.php');
 require_once('lib/facebook/src/Facebook/GraphSessionInfo.php');
 require_once('lib/facebook/src/Facebook/Entities/AccessToken.php');
 require_once('lib/facebook/src/Facebook/HttpClients/FacebookCurl.php');
 require_once('lib/facebook/src/Facebook/HttpClients/FacebookHttpable.php');
 require_once('lib/facebook/src/Facebook/HttpClients/FacebookCurlHttpClient.php');
 
 //USING NAMESPACES
 use Facebook\FacebookSession;
 use Facebook\FacebookRedirectLoginHelper;
 use Facebook\FacebookRequest;
 use Facebook\FacebookResponse;
 use Facebook\FacebookSDKException;
 use Facebook\FacebookRequestException;
 use Facebook\FacebookAuthorizationException;
 use Facebook\GraphObject;
 use Facebook\GraphUser;
 use Facebook\GraphSessionInfo;
 use Facebook\HttpClients\FacebookHttpable;
 use Facebook\HttpClients\FacebookCurlHttpClient;
 use Facebook\HttpClients\FacebookCurl;

FacebookSession::setDefaultApplication(APP_ID,APP_SECRET);
 
$pid='';                                //page id
$at="";   //access token of page
$session = new FacebookSession($at);
//print_r(session);
$request = new FacebookRequest($session, 'GET',"/".$pid."/insights/page_fan_adds_unique/day");       // retrieve facebook insights  
 /*array (
    'period' => 'monthly',
 ) );*/

$response = $request->execute()->getGraphObject()->asArray();
$data1=($response);
echo "<pre>";
//print_r($data1);

echo "<pre>";                                     
$data2=($data1['data'][0]->values);         //manipulating the array
print_r($data2);
//print_r($data2[0]->value);
//print_r($data2[2]->end_time);
foreach($data2 as $item)                    //store likes and datetime into variables
{
$likes=($item->value);
$datetime=($item->end_time);
print_r($datetime);
print_r($likes);
$sql3= "INSERT into auth_pages (page_id,likes,datetime) VALUES('".$pid."','".$likes."','".$datetime."')";  // insert into database

            if (!mysql_query($sql3))
                        { 
                 die('Error: ' . mysql_error());
                        }
                else
                { 
                  echo "likes updated";
                }
}
$data3=json_encode($data2);
//print_r($data3)

?>
 
 
 
 
 
 
 
 