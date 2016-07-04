<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = 'root';
$database = "good_people";
$port = 8889;

echo $username;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Hello World!";
// echo "Connected successfully";

$name = $_POST["name"];
$email = $_POST["email_id"];
$password = $_POST["password"];
$UID = "UID";
$type = "NGO";

$sql = "INSERT INTO ngo_details (name, email_id, password, UID, type)
VALUES ('$name', '$email', '$password', '$UID', '$type');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
