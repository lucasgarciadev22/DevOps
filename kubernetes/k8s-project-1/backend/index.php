<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'connection.php';

$id =  rand(1, 999);
$userName = $_POST["userName"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$query = "INSERT INTO mensagens(id, userName, email, comment) VALUES ('$id', '$userName', '$email', '$comment')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}
?>