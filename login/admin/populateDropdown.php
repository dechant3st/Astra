<?php

  // Connect to the database
$conn =  mysqli_connect("localhost", "root", "0014", "mydb");
 

$sql = "SELECT rank_ID, rank_name, rank_desc FROM rank";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["rank_ID"]. " - Name: " . $row["rank_name"]. " " . $row["rank_desc"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>