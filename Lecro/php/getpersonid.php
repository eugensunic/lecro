<?php

 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
 header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');


$server ="68.66.248.9";
$user="ppisforl_eusunic";
$pass="mili778899";
$dbname="ppisforl_nestoiopetnesto";


$conn = new mysqli($server, $user, $pass, $dbname);
$conn->set_charset('utf8');



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{


  if ($result = $conn->query("SELECT Id FROM osoba
WHERE osoba.Ime	='".$_POST[ime]."' AND osoba.Prezime='".$_POST[prezime]."'")) 
{

  

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
    {
            $myArray[] = $row;

    }
  


    echo json_encode($myArray,JSON_UNESCAPED_UNICODE);
 }

}


?>

