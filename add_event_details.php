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

$event_title = $_POST["event_title"];
$location = $_POST["location"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$pincode = $_POST["pincode"];
$google_map_link = $_POST["google_map_link"];
$event_time_from = $_POST["event_time_from"];
$event_time_to = $_POST["event_time_to"];
$UID = "UID";
$type = "NGO";

$sql = "INSERT INTO events_details (event_title, location, city, state, country, pincode, google_map_link,
        event_time_from, event_time_to)
VALUES ('$event_title', '$location', '$city', '$state', '$country', '$pincode', '$google_map_link', '$event_time_from',
        '$event_time_to');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
