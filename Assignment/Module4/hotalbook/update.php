<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming a connection to the database is established
    $roomId = $_GET['id'];
    $roomNumber = $_POST['number'];
    $roomType = $_POST['type'];
    $roomPrice = $_POST['price'];

    // Here you would execute an SQL update query to update the room
    // Example: 
    $sql = "UPDATE rooms SET number='$roomNumber', type='$roomType', price='$roomPrice' WHERE id=$roomId";
    
    // Execute your query and check for success
    echo json_encode(['success' => true]); // or handle errors
}
?>
