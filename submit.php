<?php
// Database connection parameters
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'unbound';

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    
    $sql = "INSERT INTO users (name, phone, email, address) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $name, $phone, $email, $address);

        if ($stmt->execute()) {
            
            header("Location: success.php"); 
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();
?>


