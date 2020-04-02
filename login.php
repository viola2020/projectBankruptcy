<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) || !empty($password)) {
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "bankruptcy";

//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
$SELECT = "SELECT logID From Login Where logID = ? Limit 1";
$INSERT = "INSERT Into Login (logID, password, attemptNo, logDate, lName) values(?, ?, ?, ?, ?)";

//Prepare statement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s", $logID);
$stmt->execute();
$stmt->bind_result($logID);
$stmt->store_result();
$rnum = #stmt->num_rows;

if ($rnum==0) {
$stmt->close();

$stmt = $conn->prepare($INSERT);
$stmt->bind_param("isids", $logID, $password, attemptNo, logDate, lName);
$stmt->execute();
echo "New record inserted successfully";
} else {
echo "Someone already registered using this username";
}
$stmt->close();
$conn->close();
}
} else {
 echo "No file attached";
die();
}
?>