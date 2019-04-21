<?php

session_start();

require './vendor/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '1084610101711725',
    'app_secret' => '40a59449fde4f6c5c5097ea69258134b',
    'default_graph_version' => 'v2.10'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("https://www.exodia.in/fb-login");

try{
    $accessToken = $helper->getAccessToken();
    if(isset($accessToken)){
        $_SESSION['access_token'] = (string)$accessToken;

        header("Location: index.php");
    }

} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

if($_SESSION['access_token']) {
    try {
        $fb->setDefaultAccessToken($_SESSION['access_token']);
        $res = $fb->get('/me?locale=en_US&fields=name,email');
        $user = $res->getGraphUser();
        echo $user->getField('name');

    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
?>