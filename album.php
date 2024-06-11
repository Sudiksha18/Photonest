<?php
$db = new mysqli('localhost', 'root', '', 'photonest');

if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}

$result = $db->query("SELECT image_data FROM event");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<img src="'.$row['image_data'].'" alt="Image">'.'   ';

    }
} else {
    echo "No images found.";
}

$db->close();
?>
