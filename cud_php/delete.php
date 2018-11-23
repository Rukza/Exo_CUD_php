<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bob";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "DELETE FROM boby WHERE id=1";


    $conn->exec($sql);
    echo "lastname deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
