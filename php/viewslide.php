<?php
// connect to the database
include 'connection.php';
$sql = "SELECT * FROM tbl_uploads";

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
// display data in table
echo "<table border='1' cellpadding='10'>";
echo "<tr> <th>ID</th> <th> Name</th> <th>Description</th><th></th> <th></th></tr>";

while($row = $result->fetch_assoc()){
    //echo $row['username'] . '<br />';
	// echo out the contents of each row into a table
echo "<tr>";
echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['image_name'] . '</td>';
echo '<td>' . $row['image_description'] . '</td>';
echo '<td><a href="php/deleteslide.php?id=' . $row['id'] . '">Delete</a></td>';
echo "</tr>";
}

echo "</table>";

// close database connection
$conn->close();
?>