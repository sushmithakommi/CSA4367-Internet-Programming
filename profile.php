<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "project2";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch details from the database
$query = "SELECT * FROM registration"; // Replace 'your_table' with your actual table name
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $details = "<h2>Database Details</h2><ul>";
    
    while ($row = $result->fetch_assoc()) {
        $details .= "<li>" . $row['vehicle_type'] . ": " . $row['license_plate'] . "</li>";
        // Add more columns as needed
    }
    
    $details .= "</ul>";
} else {
    $details = "No details found in the database.";
}

echo $details;
$conn->close();
?>
