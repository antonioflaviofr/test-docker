<?php
  session_start();
  header('Content-Type: application/json');

  function getUserIP() {

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

  if(isset($_SESSION['count']))
  {
    $_SESSION['count']++;  
  }
  else
  {
    $_SESSION['count'] = 1;  
  }
  
  $data = array(
	"User IP" => getUserIP(),
	"Date" => date("Y-m-d")
  );

  echo json_encode($data, JSON_FORCE_OBJECT);
  #echo $_SESSION['count'];
