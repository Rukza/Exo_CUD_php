<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bob";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO boby (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>



 ?>
