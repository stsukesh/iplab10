<?php
# Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'comment_system');

# Create a global connection variable
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die('Could not connect to MySQL database: ' . mysqli_error($conn));
}
?>
