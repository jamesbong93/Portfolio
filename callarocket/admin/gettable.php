<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "110.4.45.234";
$username = "jamesbon_bong";
$password = "Freedomsky@717";
$dbname = "jamesbon_callarocket";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM confirmedrequest");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"ID":"'  . $rs["id"] . '",';
    $outp .= '"UserName":"'   . $rs["userName"]        . '",';
    $outp .= '"Contactnumber":"'. $rs["contactNumber"]     . '"}'; 
}
$outp ='{"records":['.$outp.']}';

$conn->close();

echo($outp);
?>

