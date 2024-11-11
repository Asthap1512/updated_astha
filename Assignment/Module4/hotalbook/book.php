<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookingType = $_POST['booking_type'];
    $checkinDate = $_POST['checkin_date'] ?? null;
    $checkoutDate = $_POST['checkout_date'] ?? null;
    $halfDayDate = $_POST['half_day_date'] ?? null;
    $halfDaySlot = $_POST['half_day_slot'] ?? null;

    // Validate and process the booking
    if ($bookingType === 'full') {
        // Full day booking logic
        echo "Booked Full Day: Check-in - $checkinDate, Check-out - $checkoutDate";
    } elseif ($bookingType === 'half') {
        // Half day booking logic
        echo "Booked Half Day: Date - $halfDayDate, Slot - $halfDaySlot";
    } else {
        // Custom booking logic
        echo "Custom booking logic not implemented.";
    }
}
?>
