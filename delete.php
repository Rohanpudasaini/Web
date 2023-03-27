<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "registration");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get record ID to delete
$id = $_GET['id'];

// Delete record from database
$sql = "DELETE FROM user WHERE ID=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>