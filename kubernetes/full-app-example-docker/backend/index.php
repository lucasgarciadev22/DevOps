<?
header("Access-Control-Allow-Origin: *");
include 'connection.php';

$id =  rand(1, 999);
$userName = $_POST["userName"];
$userMessage = $_POST["userMessage"];

$query = "INSERT INTO messages(id, userName, userMessage) VALUES ('$id', '$userName', '$userMessage')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}
?>
