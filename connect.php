<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.
  $username = getenv('C9_USER');
    $servername = getenv('IP');
  // $host ='127.0.0.1';
  // $username = 'avijk';
 
    $password = "";
    $database = "chatdata";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername,$username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
   // echo 'jjjj';
      function formatDate($date)
       {
          return date('g:i a', strtotime($date));
       }
  //  echo "Connected successfully (".$db->host_info.")";
?>    