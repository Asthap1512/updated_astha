<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking System</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional CSS file for styling -->
</head>
<body>
    <h1>Hotel Room Listings</h1>
    <table id="room-table">
        <thead>
            <tr>
                <th>Room Number</th>
                <th>Type</th>
                <th>Price</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch room data from the database
            $rooms = [
                ['id' => 1, 'number' => '101', 'type' => 'Deluxe', 'price' => 150],
                ['id' => 2, 'number' => '102', 'type' => 'Standard', 'price' => 100],
            ];
            foreach ($rooms as $room) {
                echo "<tr data-room-id='{$room['id']}'>
                        <td>{$room['number']}</td>
                        <td>{$room['type']}</td>
                        <td>\${$room['price']}</td>
                        <td>
                            <button class='edit-btn'>Edit</button>
                            <button class='delete-btn'>Delete</button>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Edit Form -->
    <div id="edit-form" style="display: none;">
        <input type="text" id="room-number" placeholder="Room Number">
        <input type="text" id="room-type" placeholder="Room Type">
        <input type="number" id="room-price" placeholder="Room Price">
        <button id="confirm-edit">Confirm</button>
        <button id="cancel-edit">Cancel</button>
    </div>

    <h2>Book a Room</h2>
    <form id="booking-form" method="POST" action="book.php">
        <select id="booking-type" name="booking_type">
            <option value="full">Full Day</option>
            <option value="half">Half Day</option>
            <option value="custom">Custom</option>
        </select>
        
        <div id="full-day-options" class="booking-option">
            <input type="date" name="checkin_date" placeholder="Check-in Date">
            <input type="date" name="checkout_date" placeholder="Check-out Date">
        </div>
        
        <div id="half-day-options" class="booking-option" style="display: none;">
            <input type="date" name="half_day_date" placeholder="Date">
            <select name="half_day_slot">
                <option value="morning">Morning (8AM - 6PM)</option>
                <option value="evening">Evening (7PM - 7AM)</option>
            </select>
        </div>
        
        <div id="custom-options" class="booking-option" style="display: none;">
            <!-- Custom options can go here -->
        </div>

        <button type="submit">Book Room</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script> <!-- Include your JavaScript file -->
</body>
</html>
